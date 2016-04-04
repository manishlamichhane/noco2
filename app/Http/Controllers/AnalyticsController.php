<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AnalyticsController extends Controller
{
    //
    public function __construct(){

    	$this->middleware('auth');

    }

    # a get request will be sent to Rafiul's system to fetch the json of different analytics

    


}
