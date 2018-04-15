<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Huongdanvien;

class HuongdanvienController extends Controller
{
    //
    public function getDanhSach(){
    	$huongdanvien = Huongdanvien::all();
    	return view('admin.huongdanvien.danhsach',['huongdanvien'=>$huongdanvien]);
    }

    public function getThem(){
    	$huongdanvien = Huongdanvien::all();
    	return view('admin.huongdanvien.them');
    }

    public function postThem(Request $rq){
    	$this->validate($rq,
    		[
    			'hoten'=>'required',
    			'sodienthoai' =>'required',
    			'diachi' =>'required',
    		],
    		[
    			'hoten.required'=>'Bạn chưa nhập họ tên',
    			'sodienthoai.required' =>'Bạn chưa nhập số điện thoại',
    			
    			'diachi.required' => 'Bạn chưa nhập địa chỉ',
    		]);
    	$huongdanvien = new Huongdanvien;
    	$huongdanvien->hoten = $rq->hoten;
    	$huongdanvien->sodienthoai = $rq->sodienthoai;
    	$huongdanvien->diachi = $rq->diachi;
    	$huongdanvien->save();

    	return redirect('admin/huongdanvien/them')->with('thongbao','Đã thêm thành công');
	}

	public function  getSua($id){
		$huongdanvien = Huongdanvien::find($id);
		return view('admin.huongdanvien.sua',['huongdanvien'=>$huongdanvien]);
	}
	public function  postSua(Request $rq, $id){
		$huongdanvien = Huongdanvien::find($id);
		$this->validate($rq, 
			[
    			'hoten'=>'required',
    			'sodienthoai' =>'required',
    			'diachi' =>'required',
    		],
    		[
    			'hoten.required'=>'Bạn chưa nhập họ tên',
    			'sodienthoai.required' =>'Bạn chưa nhập số điện thoại',
    			
    			'diachi.required' => 'Bạn chưa nhập địa chỉ',
    		]);
    	$huongdanvien->hoten = $rq->hoten;
    	$huongdanvien->sodienthoai = $rq->sodienthoai;
    	$huongdanvien->diachi = $rq->diachi;
    	$huongdanvien->save();
    	return redirect('admin/huongdanvien/sua/'.$id)->with('thongbao','Sửa thành công');
	}

	public function getXoa($id){
		$huongdanvien = Huongdanvien::find($id);	
		$huongdanvien->delete();
		return redirect('admin/huongdanvien/danhsach')->with('thongbao','Đã xóa thành công');
	}

}
