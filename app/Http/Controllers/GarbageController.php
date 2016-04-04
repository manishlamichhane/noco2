<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use View;

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

    public function realizeGarbage(){

    	# db insertion takes place here

    }


    public function editGarbage(){

    	echo "Garbage will be edited here";

    }

    public function deleteGarbage(){

    	echo "Garbage will be deleted here";

    }

    public function returnGarbageType($garbageCatId){

    	echo "You sent :".$garbageCatId;

    	
    }



}
