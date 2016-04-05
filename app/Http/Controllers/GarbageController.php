<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use View;

use Auth;

use Session;

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

    	echo "Garbage will be deleted here";

    }

    public function returnGarbageType($garbageCatId){

    	/*echo "You sent :".$garbageCatId;*/
    	
    	
    	return View::make('garbage.garbage-type-ajax')->with('garbageTypes',\App\Garbage_type::where('garbage_cat_name','=',$garbageCatId)->get());;    	
    }



}
