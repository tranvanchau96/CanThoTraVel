<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diemdi;
use App\Tour;

class DiemdiController extends Controller
{
    //
    function getDanhSach(){
    	$diemdi = Diemdi::all();
    	return view('admin.diemdi.danhsach',['diemdi'=>$diemdi]);
    }

    function getThem(){
    	$diemdi = Diemdi::all();
    	return view('admin.diemdi.them');
    }

    function postThem(Request $rq){
    	$this->validate($rq,
    		[
    			'tendiemdi'=>'required|unique:diemdi'
    		],
    		[
    			'tendiemdi.required' => 'Bạn chưa nhập tên điểm đi',
    			'tendiemdi.unique' => 'Tên điểm đi đã tồn tại'
    		]);
    	$diemdi = new Diemdi;
    	$diemdi->tendiemdi = $rq->tendiemdi;
    	$diemdi->save();

    	return redirect('admin/diemdi/them')->with('thongbao','Đã thêm thành công');
	}
	function getSua($id){
		$diemdi = Diemdi::find($id);
		return view('admin.diemdi.sua',['diemdi'=>$diemdi]);
	}
	function postSua(Request $rq, $id){
		$diemdi = Diemdi::find($id);
		$this->validate($rq,
    		[
    			'tendiemdi'=>'required|unique:diemdi'
    		],
    		[
    			'tendiemdi.required' => 'Bạn chưa nhập tên điểm đi',
    			'tendiemdi.unique' => 'Tên điểm đi đã tồn tại'
    		]);
		$diemdi->tendiemdi = $rq->tendiemdi;
		$diemdi->save();

		return redirect('admin/diemdi/sua/'.$id)->with('thongbao','Đã sửa thành công');
	}
	function getXoa($id){
		$diemdi = Diemdi::find($id);
		$diemdi->delete();

		return redirect('admin/diemdi/danhsach')->with('thongbao','Đã xóa thành công');
	}
}
