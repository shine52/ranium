<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class neoController extends Controller
{
    function index(){
        return view('userInput');
    }

     function show(Request $request){
        //get the start and end dates from request
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $apiUrl = "https://api.nasa.gov/neo/rest/v1/feed?start_date=".$start_date. "&end_date=".$end_date."&api_key=DEMO_KEY";

        //get data from external api
        $neoData = Http::get($apiUrl);

        //get the total asteroids between the date range ,from the data
        $element_count => $neoData['element_count'];
        
        //create a collection of the relevant data i.e 'near_earth_objects' 
        $neoDayData = collect($neoData['near_earth_objects']); 

        //process the collection in the form :
        // [[id=>1,date=>'2022-5-1',size=>35,distance=>1000],[..],[..]]
        
        //initialize an empty collection of asteroids
        $asteroidList = collect([]);
        
        // total size of all the asteroids between the given dates
        $totalSizeKms = 0;
        

        $neoDayData->each(function($asteroids,$date){
            $asteroidsCollection = collect($asteroids);
            
            //get each days count,to generate graph
            $dayCount= array(
                'date'=> $date,
                'dayCount'=>$asteroidsCollection->count()    
            );
            
            //generate graph data
            $graphData->push($dayCount);
            
            $asteroidsCollection->each(function($asteroidData,$key){
                $id = $asteroidData->id;
                $speedKmph = $asteroidData->kilometers_per_hour;
                $distanceKms = $asteroidData->kilometers;
                $approach_date = $asteroidData->close_approach_date;
                $sizeKms = $asteroidData->estimated_diameter[0];
                
                $totalSizeKms += $sizeKms;
                
                //create asteroid object
                $asteroid = array(
                    'id'=>$id,
                    'speedKmph'=>$speedKmph,
                    'distanceKms'=>$distanceKms,
                    'approach_date'=>$approach_date,
                    'sizeKms'=>$sizeKms,
                );
                
                //add the asteroid object to asteroid list
                $asteroidList->push($asteroid);
            });
        });        

        //compute the average size
        $averageSizeKms = $totalSizeKms/$element_count;

        return view('neoView', [
            'asteroidList' => $asteroidList,
            'start_date'=>$start_date,
            'end_date'=>$end_date,
            'averageSizeKms'=>$averageSizeKms,
            'fastestAsteroid' =>[
                'id'=>$fastestAsteroidId,
                'speedKmph'=> $fastestAsteroidSpeed,
             ]
        
             'closestAsteroid' =>[
               'id'=>$closestAsteroidId,
               'distanceKms'=> $closestAsteroidDistanceKms,
             ],
             graphData=>$graphData
        ]);
        
        // return view('neoView',['start_date'=>$start_date,'end_date'=>$end_date]);


     }
}
