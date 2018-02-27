<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anhtour extends Model
{
    //
    protected $table = "Anhtour";

    public function tour(){
    	return $this->belongsTo('App\Tour','id_tour','id');
    }
}
