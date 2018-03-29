<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Toado;
use App\Tour;
use App\Gmaps_geocaches;

class toadoController extends Controller
{
    //
    function getDanhSach(){
    	$toado = Toado::all();
    	// $tour = Tour::all();
    	// $gmaps = Gmaps_geocaches::all();
    	return view('admin.toado.danhsach',['toado'=>$toado]);
    }
    // ,'tour'=>$tour,'gmaps'=>$gmaps

    function getThem(){
    	$toado = Toado::all();
    	$tour = Tour::all();
    	$gmaps = Gmaps_geocaches::all();
    	return view('admin.toado.them',['toado'=>$toado,'tour'=>$tour,'gmaps'=>$gmaps]);
    }

    function postThem(Request $rq){
    	
    	$toado = new Toado;
    	$toado->id_tour = $rq->tour;
        $toado->id_gmaps = $rq->gmaps;
    	$toado->save();

    	return redirect('admin/toado/them')->with('thongbao','Đã thêm thành công');
	}


	function getXoa($id){
		$toado = Toado::find($id);	
		$toado->delete();
		return redirect('admin/toado/danhsach')->with('thongbao','Đã xóa thành công');
	}
}
