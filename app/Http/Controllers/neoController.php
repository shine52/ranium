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
       

        // $neoData = Http::get("https://api.nasa.gov/neo/rest/v1/feed?start_date=2015-09-07&end_date=2015-09-08&api_key=DEMO_KEY");

        // return view('neoView', ['neoDayData' => $neoData['near_earth_objects']]);
        return view('neoView',['start_date'=>$start_date,'end_date'=>$end_date]);


     }
}
