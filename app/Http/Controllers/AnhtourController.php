<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anhtour;
use App\Tour;

class AnhtourController extends Controller
{
    //
    public function getDanhSach(){
    	$anhtour = Anhtour::all();
    	return view('admin.anhtour.danhsach',['anhtour'=>$anhtour]);
    }
    public function  getSua($id){
        $anhtour = Anhtour::find($id);
        return view('admin.anhtour.sua',['anhtour'=>$anhtour]);
    }
    public function  postSua(Request $rq, $id){
        $anhtour = Anhtour::find($id);
        // $this->validate($rq, 
        //     [
        //         'hoten'=>'required',
        //         'sodienthoai' =>'required',
        //         'diachi' =>'required',
        //     ],
        //     [
        //         'hoten.required'=>'Bạn chưa nhập họ tên',
        //         'sodienthoai.required' =>'Bạn chưa nhập số điện thoại',
                
        //         'diachi.required' => 'Bạn chưa nhập địa chỉ',
        //     ]);
        // $anhtour->id_tour = $rq->id_tour;
        
        if($rq->hasFile('bg1')){
            $file = $rq->file('bg1');

            $name = $file->getClientOriginalName();
            $hinh = str_random(3)."-".$name;
            while(file_exists("images/tour/".$hinh)) {
                $hinh = str_random(3)."-".$name;
            }
            $file->move("images/tour/",$hinh);
            
            $anhtour->bg1 =$hinh;

        }
        // $anhtour->id_tour = $rq->id_tour;
        if($rq->hasFile('bg2')){
            $file = $rq->file('bg2');

            $name = $file->getClientOriginalName();
            $hinh = str_random(3)."-".$name;
            while (file_exists("images/tour/".$hinh)) {
                $hinh = str_random(3)."-".$name;
            }
            $file->move("images/tour/",$hinh);
            
            $anhtour->bg2 =$hinh;

        }
       
        if($rq->hasFile('bg3')){
            $file = $rq->file('bg3');

            $name = $file->getClientOriginalName();
            $hinh = str_random(3)."-".$name;
            while (file_exists("images/tour/".$hinh)) {
                $hinh = str_random(3)."-".$name;
            }
            $file->move("images/tour/",$hinh);
            
            $anhtour->bg3 =$hinh;

        }
        
        if($rq->hasFile('bg4')){
            $file = $rq->file('bg4');

            $name = $file->getClientOriginalName();
            $hinh = str_random(3)."-".$name;
            while (file_exists("images/tour/".$hinh)) {
                $hinh = str_random(3)."-".$name;
            }
            $file->move("images/tour/",$hinh);
            
            $anhtour->bg4 =$hinh;

        }
        
        if($rq->hasFile('thumn1')){
            $file = $rq->file('thumn1');

            $name = $file->getClientOriginalName();
            $hinh = str_random(3)."-".$name;
            while (file_exists("images/tour/".$hinh)) {
                $hinh = str_random(3)."-".$name;
            }
            $file->move("images/tour/",$hinh);
            
            $anhtour->thumn1 =$hinh;

        }

        if($rq->hasFile('thumn2')){
            $file = $rq->file('thumn2');

            $name = $file->getClientOriginalName();
            $hinh = str_random(3)."-".$name;
            while (file_exists("images/tour/".$hinh)) {
                $hinh = str_random(3)."-".$name;
            }
            $file->move("images/tour/",$hinh);
            
            $anhtour->thumn2 =$hinh;

        }

        
        // $anhtour->bg2 = $rq->bg2;
        // $anhtour->bg3 = $rq->bg3;
        // $anhtour->bg4 = $rq->bg4;
        // $anhtour->thumn1 = $rq->thumn1;
        // $anhtour->thumn2 = $rq->thumn2;
        $anhtour->save();
        return redirect('admin/anhtour/sua/'.$id)->with('thongbao','Sửa thành công');
    }



    
}
