<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dattour extends Model
{
    //
    protected $table = "Dattour";

    public function tour(){
    	return $this->belongsTo('App\Tour','id_tour','id');
    }
}
