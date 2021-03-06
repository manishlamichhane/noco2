<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use View;

use Auth;

use Session;

use DB;

class GarbageController extends Controller
{
    //
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function createGarbage(){

    	/*echo "A form will be presented here";*/

    	return View::make('garbage/create')->with('garbages',\App\Garbage_category::all());


    }

    public function realizeGarbage(Request $request){

    	# db insertion takes place here

    	$user_garbage_relationship = new \App\User_garbage_relationship;

    	$user_garbage_relationship->user = Auth::id();

    	$user_garbage_relationship->garbage_type = $request->garbage_type;

    	$user_garbage_relationship->garbage_unit = $request->garbage_unit;

    	$user_garbage_relationship->save();

    	return redirect('home')->with('home_message','Garbage created successfully!');



    }


    public function editGarbage(){

    	echo "Garbage will be edited here";

    }

    public function deleteGarbage(){

        $oneWeekBackFromNow = date('Y-m-d H:i:s',strtotime('-1 week'));

        $query = "select x.user_garbage_id,y.garbage_type_name,x.garbage_unit,x.created_at from user_garbage_relationships x inner join garbage_types y on x.garbage_type = y.garbage_type_id where x.created_at >='".$oneWeekBackFromNow."' and x.user = ".Auth::id();


        return View::make('garbage/delete')->with('garbages',DB::select($query));
        

    }


    public function removeGarbage($userGarbageId){

        if(\App\User_garbage_relationship::find($userGarbageId)->forceDelete())

            return redirect('home')->with('home_message','Garbage deleted successfully!');

        return redirect('home')->with('home_message','Garbage could not be deleted successfully!');


    }

    public function returnGarbageType($garbageCatId){

    	/*echo "You sent :".$garbageCatId;*/
    	
    	
    	return View::make('garbage.garbage-type-ajax')->with('garbageTypes',\App\Garbage_type::where('garbage_cat_name','=',$garbageCatId)->get());;    	
    }



}
