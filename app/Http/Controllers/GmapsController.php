<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gmaps_geocaches;

class GmapsController extends Controller
{
    //
     //
    public function getDanhSach(){
    	$gmap = Gmaps_geocaches::all();
    	return view('admin.gmaps_geocache.danhsach',['gmap'=>$gmap]);
    }

    public function getThem(){
    	$gmap = Gmaps_geocaches::all();
    	return view('admin.gmaps_geocache.them');
    }

    public function postThem(Request $rq){
    	$this->validate($rq,
    		[
    			'address'=>'required|unique:gmaps_geocache',
    			'latitude' =>'required|unique:gmaps_geocache',
    			'longitude' =>'required|unique:gmaps_geocache',
    		],
    		[
    			'address.required'=>'Bạn chưa nhập address',
    			'address.unique' =>'Tên address đã tồn tại',
    			
    			'latitude.required'=>'Bạn chưa nhập latitude',
    			'latitude.unique' =>'Tên latitude đã tồn tại',

    			'longitude.required'=>'Bạn chưa nhập longitude',
    			'longitude.unique' =>'Tên longitude đã tồn tại',
    		]);
    	$gmap = new Gmaps_geocaches;
    	$gmap->address = $rq->address;
    	$gmap->latitude = $rq->latitude;
    	$gmap->longitude = $rq->longitude;
    	$gmap->save();

    	return redirect('admin/gmaps_geocache/them')->with('thongbao','Đã thêm thành công');
	}

	public function  getSua($id){
		$gmap = Gmaps_geocaches::find($id);
		return view('admin.gmaps_geocache.sua',['gmap'=>$gmap]);
	}
	public function  postSua(Request $rq, $id){
		$gmap = Gmaps_geocaches::find($id);
		$this->validate($rq, 
			[
    			'address'=>'required',
    			'latitude' =>'required',
    			'longitude' =>'required',
    		],
    		[
    			'address.required'=>'Bạn chưa nhập address',
    			
    			'latitude.required'=>'Bạn chưa nhập latitude',

    			'longitude.required'=>'Bạn chưa nhập longitude',
    		]);
    	$gmap->address = $rq->address;
    	$gmap->latitude = $rq->latitude;
    	$gmap->longitude = $rq->longitude;
    	$gmap->save();
    	return redirect('admin/gmaps_geocache/sua/'.$id)->with('thongbao','Sửa thành công');
	}

	public function getXoa($id){
		$gmap = Gmaps_geocaches::find($id);	
		$gmap->delete();
		return redirect('admin/gmaps_geocache/danhsach')->with('thongbao','Đã xóa thành công');
	}
}
