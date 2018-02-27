<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khachsan extends Model
{
    //
    protected $table = "Khachsan";

    public function tour(){
    	return $this->hasMany('App\Tour','id_khachsan','id');
    }
}
