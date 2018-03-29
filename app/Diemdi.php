<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diemdi extends Model
{
    //
    protected $table = "Diemdi";

    public function tour(){
    	return $this->hasMany('App\Tour','id_diemdi','id');
    }
}
