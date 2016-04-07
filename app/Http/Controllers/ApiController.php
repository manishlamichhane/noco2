<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Auth;

class ApiController extends Controller
{


    public function getAllUserUnit(){

        /*
            
            Call this method if you want the data of unit of waste generation of all users
        */

		$oneWeekBackFromNow = date('Y-m-d H:i:s',strtotime('-1 week'));

       
        $queryToJoinUserWithGarUnit = "SELECT name,sum(garbage_unit) as garbage_unit FROM user_garbage_relationships x inner join users y on x.user = y.user_id and x.created_at >= '".$oneWeekBackFromNow."' group by user"; 

        echo json_encode(DB::select($queryToJoinUserWithGarUnit));    

    }




    public function getLocationUnitAll(){

        /*
            This method returns the total garbage consumption of different places over last 7 days

        */

        $oneWeekBackFromNow = date('Y-m-d H:i:s',strtotime('-1 week'));

        $query = "SELECT location,sum(garbage_unit) as garbage_unit FROM user_garbage_relationships x inner join users y on x.user = y.user_id and x.created_at >= '".$oneWeekBackFromNow."' group by location;";

        echo json_encode(DB::select($query));



    }
    
}



