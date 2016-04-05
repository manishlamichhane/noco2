<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garbage_type extends Model
{
    //

    public function garbage_category(){

    	return $this->belongsTo('App\Garbage_category');
    }
}
