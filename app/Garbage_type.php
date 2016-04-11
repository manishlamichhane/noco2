<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garbage_type extends Model
{
    //

	protected $id = "garbage_type_id";

    public function garbage_category(){

    	return $this->belongsTo('App\Garbage_category');
    }

    public function user_garbage_relationship(){

    	return $this->hasMany('App\user_garbage_relationship','user_garbage_id','id');

    }
}
