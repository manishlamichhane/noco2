<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Auth;

class ApiController extends Controller
{


    public function getUserUnitAll(){

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


    public function getGarbageUnitAll(){

        /*
            
            This method returns all the garbage and their consumption in unit over the past week
    
        */

        $oneWeekBackFromNow = date('Y-m-d H:i:s',strtotime('-1 week'));

        $query = "SELECT garbage_type_name,sum(garbage_unit) as garbage_unit FROM user_garbage_relationships x inner join garbage_types y on x.garbage_type = y.garbage_type_id and x.created_at >= '".$oneWeekBackFromNow."' group by garbage_type;";

        echo json_encode(DB::select($query));


    }


    public function getUserIndividualGarbageHistory(){

        /*
            This method is used by Co2 controller of garbprocessor to get the garbage consumption of each user. It will help to calculate the carbon emission of each user. Carbon Emission for each garbage is different from other. So carbon emussion of each unit of each garbage is to be calculated and then later summed up to get a total value for each user.

        */

        $oneWeekBackFromNow = date('Y-m-d H:i:s',strtotime('-1 week'));

        $query = "select name,garbage_type_name,garbage_unit from users p inner join (SELECT user,garbage_type_name,garbage_unit FROM user_garbage_relationships x inner join garbage_types y WHERE x.garbage_type = y.garbage_type_id and x.created_at >= '".$oneWeekBackFromNow."' ) q where p.user_id = q.user";

        echo json_encode(DB::select($query));            



    }


    
}



