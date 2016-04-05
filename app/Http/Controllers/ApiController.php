<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Auth;

class ApiController extends Controller
{
    //
    public function getPastWeekDataAll(){

    	$oneWeekBackFromNow = date('Y-m-d H:i:s',strtotime('-1 week'));

        $queryToJoinUserGarbageRelWithGarType = "SELECT garbage_type_name,sum(garbage_unit) as garbage_unit, x.created_at FROM user_garbage_relationships x inner join garbage_types y on x.garbage_type = y.garbage_type_id and x.created_at >= '".$oneWeekBackFromNow."' group by garbage_type_name";

        echo json_encode(DB::select($queryToJoinUserGarbageRelWithGarType));

    }


    public function getPastWeekDataForUser($userId){

		$oneWeekBackFromNow = date('Y-m-d H:i:s',strtotime('-1 week'));

        $queryToJoinUserGarbageRelWithGarType = "SELECT garbage_type_name,sum(garbage_unit) as garbage_unit, x.created_at FROM user_garbage_relationships x inner join garbage_types y on x.garbage_type = y.garbage_type_id and x.user=$userId and x.created_at >= '".$oneWeekBackFromNow."' group by garbage_type_name";

        echo json_encode(DB::select($queryToJoinUserGarbageRelWithGarType));    	

    }
}
