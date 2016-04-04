<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GarbageController extends Controller
{
    //
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function createGarbage(){}

    public function editGarbage(){}

    public function deleteGarbage(){}



}
