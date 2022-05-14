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

        // $neoData = Http::get($apiUrl);
        // return view('neoView', [
        //     'neoDayData' => $neoData['near_earth_objects'],
        //     'element_count'=> $neoData['element_count'];
        //     'start_date'=>$start_date,
        //     'end_date'=>$end_date
        // ]);
        return view('neoView',['start_date'=>$start_date,'end_date'=>$end_date]);


     }
}
