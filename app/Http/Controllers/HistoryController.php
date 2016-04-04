<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HistoryController extends Controller
{
    //

    public function __construct(){

    	$this->middleware('auth');

    }


    public function viewAllHistory(){}

    public function viewLastWeekHistory(){}

    public function viewLastMonthHistory(){}

    public function viewLastYearHistory(){}


}
