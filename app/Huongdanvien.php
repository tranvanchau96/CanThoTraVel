<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Huongdanvien extends Model
{
    //
    protected $table = "Huongdanvien";

    public function tour(){
    	return $this->hasMany('App\Tour','id_huongdanvien','id');
    }
}
