<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quangcao;
use App\Storage;

class QuangcaoController extends Controller
{
    //
    public function getDanhSach(){
    	$quangcao = Quangcao::all();
    	return view('admin.quangcao.danhsach',['quangcao'=>$quangcao]);
    }
    public function getThem(){
    	
    	return view('admin.quangcao.them');
    }
    public function postThem(Request $rq){
    	$this->validate($rq,
    		[
    			'anh'=>'required|image:jpg,jpeg, png, bmp, gif, svg',
    			
    			'url' =>'required|unique:quangcao',
    		],
    		[
    			'anh.required'=>'Bạn chưa chọn ảnh',
    			'anh.image' =>'File bạn chọn không đúng định dạng ảnh(jpeg, png, bmp, gif, svg)',
    			
    			'url.required' => 'Bạn chưa nhập URL',
    			'url.unique' => 'URL đã tồn tại',
    		]);
        $quangcao = new Quangcao;
        $file = $rq->file('anh');
        $name = $file->getClientOriginalName();
        $hinh = str_random(3)."-".$name;
        while(file_exists("images/quangcao/".$hinh)) {
            $hinh = str_random(3)."-".$name;
        }
        $file->move("images/quangcao/",$hinh);
            
                	
    	$quangcao->anh = $hinh;
    	$quangcao->url = $rq->url;
    	$quangcao->save();
    	return redirect('admin/quangcao/them')->with('thongbao','Đã thêm thành công');
    }

   public function getSua($id){
    	$quangcao = Quangcao::find($id);
    	return view('admin.quangcao.sua',['quangcao'=>$quangcao]);
    }
    public function postSua(Request $rq, $id){
    	$quangcao = Quangcao::find($id);
    	$quangcao->id = $rq->id;

    	if($rq->hasFile('anh')){
    		$file = $rq->file('anh');
    		$name = $file->getClientOriginalName();
            $hinh = str_random(3)."-".$name;
            while(file_exists("images/quangcao/".$hinh)) {
                $hinh = str_random(3)."-".$name;
            }
            $file->move("images/quangcao/",$hinh);
            
            $quangcao->anh =$hinh;
    	}
    	$quangcao->url = $rq->url;
    	$quangcao->save();
    	return redirect('admin/quangcao/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getXoa($id){
    	$quangcao = Quangcao::find($id);
    	$quangcao->delete();

    	return redirect('admin/quangcao/danhsach')->with('thongbao','Xóa thành công');
    }

}
