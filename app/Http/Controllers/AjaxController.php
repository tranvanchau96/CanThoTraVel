<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\Gmaps_geocaches;
use App\Toado;


class AjaxController  extends Controller
{
    //
    function getGmaps($id_tour){
    	$tour = Tour::all();
    	$toado = Toado::all();
    	$gmaps = Gmaps_geocaches::all();
    	
    	$i = 0;
    	$count = sizeof($toado);
    	$arr = array();
    	foreach($toado as $td){
    		if($td->id_tour == $id_tour){
    			$arr[$i] = $td->id_gmaps;
    			$i++;
    		}
    	}
    	// echo $count."<br>";
    	// echo $i."<br>";
    	// foreach($arr as $a){
    	// 	echo $a;
    	// }
    	foreach($gmaps as $gm){
    		if(!in_array($gm->id, $arr)){
    			// echo "<option value='".$gm->id."'>".$gm->address."</option>";
                echo "<option value='".$gm->id."'>".$gm->id."&nbsp;&nbsp;".$gm->address."</option>";
    		}
    	}
    }
   
}

?>