<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tour;
use App\Diemthamquan;
class PageController extends Controller
{
    //
    function index(){
    	
    	return view('pages.index');
    }
    function tour(){
    	$tour = Tour::all();
    	return view('pages.tour',['tour'=>$tour]);
    }

    function chitiettour($id){
        $tour = Tour::find($id);
        $tourmoinhat=Tour::orderBy('id','desc')->take(3)->get();
        $diemthamquan = Diemthamquan::orderBy('id','desc')->take(3)->get();
    	return view('pages.chitiettour',['tour'=> $tour,'tourmoinhat'=>  $tourmoinhat,'diemthamquan'=>$diemthamquan]);
    }

    function thamquan(){
        return view('pages.thamquan');
    }
    function diemthamquan(){
        return view('pages.diemthamquan');
    }
}
