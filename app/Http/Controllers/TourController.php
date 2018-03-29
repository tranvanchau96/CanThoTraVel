<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\Diemdi;
use App\Huongdanvien;
use App\Khachsan;
use App\Toado;
use App\Anhtour;
use App\Gmaps_geocaches;


class TourController extends Controller
{
    //
    function getDanhSach(){
    	$tour = Tour::all();
    	return view('admin.tour.danhsach',['tour'=>$tour]);
    }
    function getThem(){
    	$diemdi = Diemdi::all();
    	$huongdanvien = Huongdanvien::all();
    	$khachsan = Khachsan::all();
    	return view('admin.tour.them',['diemdi'=>$diemdi,'khachsan'=>$khachsan,'huongdanvien'=>$huongdanvien]);
    }
    function postThem(Request $rq){

    	$tour  = new Tour;

		$tour->id_diemdi = $rq->id_diemdi;
		$tour->id_khachsan = $rq->id_khachsan;
		$tour->id_huongdanvien = $rq->id_huongdanvien;
		$tour->tieude = $rq->tieude;
		$tour->tieudekhongdau = changeTitle($rq->tieude);
		$tour->ngaykhoihanh = $rq->ngaykhoihanh;
		$tour->giokhoihanh = $rq->giokhoihanh;
		$tour->noikhoihanh = $rq->noikhoihanh;
		$tour->giotaptrung = $rq->giotaptrung;
		$tour->songaydi = $rq->songaydi;
		$tour->socho = $rq->socho;
		$tour->sochoconlai = $rq->socho;
		$tour->lichtrinh = $rq->lichtrinh;
		$tour->dieukhoan = $rq->dieukhoan;
		$tour->gianguoilon = $rq->gianguoilon;
		$tour->giatreem = $rq->giatreem;
		$tour->giatrenho = $rq->giatrenho;
		$tour->giaembe = $rq->giaembe;
		$tour->giaphongdon = $rq->giaphongdon;
		$tour->gioithieu = $rq->gioithieu;
		$tour->save();

		return redirect('admin/tour/themchitiettour')->with('thongbao','Đã thêm thành công');

    }

    function getThemchitiettour(){
    	$tour = Tour::orderBy('id','desc')->first();
    	
    	$gmaps  = Gmaps_geocaches::all();
    	return view('admin.tour.themchitiettour',['tour'=>$tour,'gmaps'=>$gmaps]);
    }


    function postThemchitiettour(Request $rq, $id){
    	$anhtour = new Anhtour;
    	$toado = new Toado;
    	
    	$anhtour->id_tour = $id;

    	if($rq->hasFile('bg1')){
	    	$file = $rq->file('bg1');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/tour/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/tour/",$hinh);
	        $anhtour->bg1 = $hinh;
 		}
 		else {
 			$anhtour->bg1 = "";
 		}

 		if($rq->hasFile('bg2')){
	    	$file = $rq->file('bg2');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/tour/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/tour/",$hinh);
	        $anhtour->bg2 = $hinh;
 		}
 		else {
 			$anhtour->bg2 = "";
 		}

 		if($rq->hasFile('bg3')){
	    	$file = $rq->file('bg3');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/tour/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/tour/",$hinh);
	        $anhtour->bg3 = $hinh;
 		}
 		else {
 			$anhtour->bg3 = "";
 		}

 		if($rq->hasFile('bg4')){
	    	$file = $rq->file('bg4');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/tour/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/tour/",$hinh);
	        $anhtour->bg4 = $hinh;
 		}
 		else {
 			$anhtour->bg4 = "";
 		}

 		if($rq->hasFile('thumn1')){
	    	$file = $rq->file('thumn1');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/tour/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/tour/",$hinh);
	        $anhtour->thumn1 = $hinh;
 		}
 		else {
 			$anhtour->thumn1 = "";
 		}

 		if($rq->hasFile('thumn2')){
	    	$file = $rq->file('thumn2');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/tour/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/tour/",$hinh);
	        $anhtour->thumn2 = $hinh;
 		}
 		else {
 			$anhtour->thumn2 = "";
 		}

 		$anhtour->save();

    	foreach($rq->id_gmaps as $value){
    		$toado = new Toado;
    		$toado->id_tour = $id;
    		$toado->id_gmaps = $value;
    		$toado->save();
    	}


    	return redirect('admin/tour/them')->with('thongbao','Đã thêm thành công');
    }

    function getXoa($id){
    	$tour = Tour::find($id);
    	$anhtour = Anhtour::where('id_tour',$id);
    	$toado = Toado::where('id_tour',$id);
    	$toado->delete();
    	$anhtour->delete();
    	$tour->delete();

		return redirect('admin/tour/danhsach')->with('thongbao','Đã xóa thành công');
    }
}
