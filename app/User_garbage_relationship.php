<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_garbage_relationship extends Model
{
    //

    protected $primaryKey = "user_garbage_id";

    public function garbage_type(){

    	return $this->belongsTo('App\Garbage_type','garbage_type_id','id');

    }
}
