<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gmaps_geocaches extends Model
{
    //
    protected $table = "gmaps_geocache";

    public function toado(){
    	return $this->hasMany('App\Toado','id_gmaps','id');
    }
}
