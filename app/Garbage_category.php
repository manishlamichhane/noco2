<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garbage_category extends Model
{
    //
    public function garbage_type(){

    	return $this->hasMany('App\Garbage_type');
    }
}
