<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diemthamquan;

class DiemthamquanController extends Controller
{
    //
    public function getDanhSach(){
    	$diemthamquan = Diemthamquan::all();
    	return view('admin.diemthamquan.danhsach',['diemthamquan'=>$diemthamquan]);
    }
    public function getThem(){
    	
    	return view('admin.diemthamquan.them');
    }
    public function postThem(Request $rq){
    	$this->validate($rq,
    		[
    			'ten'=>'required',
    			'gioithieu'=>'required',
    		],
    		[
    			'ten.required'=>'Bạn chưa nhập tên điểm đi',
    			'gioithieu.required' => 'Bạn chưa nhập phần giới thiệu',
    		]);

    	$diemthamquan = new Diemthamquan;

    	$diemthamquan->ten = $rq->ten;
    	$diemthamquan->tenkhongdau = changeTitle($rq->ten);
    	$diemthamquan->gioithieu = $rq->gioithieu;
    	$diemthamquan->text1 = $rq->text1;
    	$diemthamquan->text2 = $rq->text2;
    	$diemthamquan->text3 = $rq->text3;
    	$diemthamquan->text4 = $rq->text4;

 		if($rq->hasFile('background')){
	    	$file = $rq->file('background');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->background = $hinh;
 		}
 		else {
 			$diemthamquan->background = "";
 		}

 		if($rq->hasFile('headerxua')){
	    	$file = $rq->file('headerxua');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->headerxua = $hinh;
 		}
 		else {
 			$diemthamquan->headerxua = "";
 		}

 		if($rq->hasFile('xua1img600x391')){
	    	$file = $rq->file('xua1img600x391');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->xua1img600x391 = $hinh;
 		}
 		else {
 			$diemthamquan->xua1img600x391 = "";
 		}

 		if($rq->hasFile('xua2img710x391')){
	    	$file = $rq->file('xua2img710x391');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->xua2img710x391 = $hinh;
 		}
 		else {
 			$diemthamquan->xua2img710x391 = "";
 		}

 		if($rq->hasFile('xua3img600x253')){
	    	$file = $rq->file('xua3img600x253');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->xua3img600x253 = $hinh;
 		}
 		else {
 			$diemthamquan->xua3img600x253 = "";
 		}

 		if($rq->hasFile('headernay')){
	    	$file = $rq->file('headernay');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->headernay = $hinh;
 		}
 		else {
 			$diemthamquan->headernay = "";
 		}

 		if($rq->hasFile('naybgimg1366x160')){
	    	$file = $rq->file('naybgimg1366x160');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->naybgimg1366x160 = $hinh;
 		}
 		else {
 			$diemthamquan->naybgimg1366x160 = "";
 		}

 		if($rq->hasFile('nay1img668x')){
	    	$file = $rq->file('nay1img668x');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->nay1img668x = $hinh;
 		}
 		else {
 			$diemthamquan->nay1img668x = "";
 		}

 		if($rq->hasFile('nay2img668x')){
	    	$file = $rq->file('nay2img668x');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->nay2img668x = $hinh;
 		}
 		else {
 			$diemthamquan->nay2img668x = "";
 		}

 		if($rq->hasFile('nay3img668x')){
	    	$file = $rq->file('nay3img668x');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->nay3img668x = $hinh;
 		}
 		else {
 			$diemthamquan->nay3img668x = "";
 		}

 		if($rq->hasFile('nay4img668x')){
	    	$file = $rq->file('nay4img668x');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->nay4img668x = $hinh;
 		}
 		else {
 			$diemthamquan->nay4img668x = "";
 		}

 		$diemthamquan->save();
    	return redirect('admin/diemthamquan/them')->with('thongbao','Đã thêm thành công');
    }
    public function getSua($id){
    	$diemthamquan = Diemthamquan::find($id);
    	return view('admin.diemthamquan.sua',['diemthamquan'=>$diemthamquan]);
    }

    public function postSua(Request $rq, $id){
		$diemthamquan = Diemthamquan::find($id);
		$diemthamquan->id = $rq->id;
		$diemthamquan->ten = $rq->ten;
    	$diemthamquan->tenkhongdau = changeTitle($rq->ten);
    	$diemthamquan->gioithieu = $rq->gioithieu;
    	$diemthamquan->text1 = $rq->text1;
    	$diemthamquan->text2 = $rq->text2;
    	$diemthamquan->text3 = $rq->text3;
    	$diemthamquan->text4 = $rq->text4;

 		if($rq->hasFile('background')){
	    	$file = $rq->file('background');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->background = $hinh;
 		}
 		
 		if($rq->hasFile('headerxua')){
	    	$file = $rq->file('headerxua');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->headerxua = $hinh;
 		}
 		
 		if($rq->hasFile('xua1img600x391')){
	    	$file = $rq->file('xua1img600x391');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->xua1img600x391 = $hinh;
 		}
 		

 		if($rq->hasFile('xua2img710x391')){
	    	$file = $rq->file('xua2img710x391');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->xua2img710x391 = $hinh;
 		}

 		if($rq->hasFile('xua3img600x253')){
	    	$file = $rq->file('xua3img600x253');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->xua3img600x253 = $hinh;
 		}

 		if($rq->hasFile('headernay')){
	    	$file = $rq->file('headernay');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->headernay = $hinh;
 		}

 		if($rq->hasFile('naybgimg1366x160')){
	    	$file = $rq->file('naybgimg1366x160');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->naybgimg1366x160 = $hinh;
 		}

 		if($rq->hasFile('nay1img668x')){
	    	$file = $rq->file('nay1img668x');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->nay1img668x = $hinh;
 		}

 		if($rq->hasFile('nay2img668x')){
	    	$file = $rq->file('nay2img668x');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->nay2img668x = $hinh;
 		}

 		if($rq->hasFile('nay3img668x')){
	    	$file = $rq->file('nay3img668x');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->nay3img668x = $hinh;
 		}

 		if($rq->hasFile('nay4img668x')){
	    	$file = $rq->file('nay4img668x');
	        $name = $file->getClientOriginalName();
	        $hinh = str_random(3)."-".$name;
	        while(file_exists("images/thamquan/".$hinh)) {
	            $hinh = str_random(3)."-".$name;
	        }
	        $file->move("images/thamquan/",$hinh);
	        $diemthamquan->nay4img668x = $hinh;
 		}

 		$diemthamquan->save();
		return redirect('admin/diemthamquan/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getXoa($id){
    	$diemthamquan = Diemthamquan::find($id);
    	$diemthamquan->delete();

		return redirect('admin/diemthamquan/danhsach')->with('thongbao','Đã xóa thành công');
    }
}
