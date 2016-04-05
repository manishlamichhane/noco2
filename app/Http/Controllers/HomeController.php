<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Session;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        # here garbage history for this week is loaded by default

        $oneWeekBackFromNow = date('Y-m-d H:i:s',strtotime('-1 week'));

        $queryToJoinUserGarbageRelWithGarType = "SELECT garbage_type_name,sum(garbage_unit) as garbage_unit, x.created_at FROM user_garbage_relationships x inner join garbage_types y on x.garbage_type = y.garbage_type_id and x.user= ".Auth::id()." and x.created_at >= '".$oneWeekBackFromNow."' group by garbage_type_name";


        $record = array('defaultGarbageHistory' => DB::select($queryToJoinUserGarbageRelWithGarType));

        return view('home',$record);
    }
}
