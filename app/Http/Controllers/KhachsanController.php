<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Khachsan;

class KhachsanController extends Controller
{
    //
    function getDanhSach(){
    	$khachsan = Khachsan::all();
    	return view('admin.khachsan.danhsach',['khachsan'=>$khachsan]);
    }

    function getThem(){
    	return view('admin.khachsan.them');
    }

    function postThem(Request $rq){
    	$this->validate($rq,
    		[
    			'ten'=>'required|unique:khachsan',
    			'url' =>'required',
    		],
    		[
    			'ten.required'=>'Bạn chưa nhập tên khách sạn',
    			'ten.unique'=>'Tên khách sạn đã tồn lại',
    			'url.required' =>'Bạn chưa nhập url',
    		]);
    	$khachsan = new Khachsan;
    	$khachsan->ten = $rq->ten;
        $khachsan->tenkhongdau = changeTitle($rq->ten);
    	$khachsan->url = $rq->url;
    	$khachsan->save();

    	return redirect('admin/khachsan/them')->with('thongbao','Đã thêm thành công');
	}

	function  getSua($id){
		$khachsan = Khachsan::find($id);
		return view('admin.khachsan.sua',['khachsan'=>$khachsan]);
	}
	function  postSua(Request $rq, $id){
		$khachsan = Khachsan::find($id);
		$this->validate($rq, 
			[
    			
    			'url' =>'required',
    		],
    		[
    			
    			'url.required' =>'Bạn chưa nhập url',
    		]);
    	$khachsan->ten = $rq->ten;
        $khachsan->tenkhongdau = changeTitle($rq->ten);
    	$khachsan->url = $rq->url;
    	$khachsan->save();
    	return redirect('admin/khachsan/sua/'.$id)->with('thongbao','Sửa thành công');
	}

	function getXoa($id){
		$khachsan = Khachsan::find($id);	
		$khachsan->delete();
		return redirect('admin/khachsan/danhsach')->with('thongbao','Đã xóa thành công');
	}
}
