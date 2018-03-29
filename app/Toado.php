<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toado extends Model
{
    //
    protected $table = "toado";

    
    public function gmaps_geocache(){
    	return $this->belongsTo('App\Gmaps_geocaches','id_gmaps','id');
    }
    public function tour(){
    	return $this->belongsTo('App\Tour','id_tour','id');
    }
}
