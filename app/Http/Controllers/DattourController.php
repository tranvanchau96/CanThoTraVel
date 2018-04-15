<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dattour;
use App\Tour;


class DattourController extends Controller
{
    //
    public function getDanhSach(){
    	$dattour = Dattour::all();

    	return view('admin.dattour.danhsach',['dattour'=>$dattour]);
    }

    public function getXoa($id){
    	$dattour = Dattour::find($id);
    	$tour = Tour::where('id',$dattour->id_tour)->first();
    	$tour->sochoconlai = $tour->sochoconlai + $dattour->tongcho;
    	$tour->save();
    	$dattour->delete();

    	return redirect('admin/dattour/danhsach')->with('thongbao','Đã xóa thành công');
    }

    public function getSua($id){
    	$dattour = Dattour::find($id);
    	$tour = Tour::where('id',$dattour->id_tour)->first();
    	return view('admin.dattour.sua',['dattour'=>$dattour,'tour'=>$tour]);
    }
    public function postSua(Request $rq, $id){
    	$dattour = Dattour::find($id);
$tour = Tour::where('id',$dattour->id_tour)->first();
$tour->sochoconlai =$tour->sochoconlai + $dattour->tongcho;
    	$dattour->hoten = $rq->hoten;
        $dattour->diachi = $rq->diachi;
        $dattour->sodienthoai = $rq->sodienthoai;
        $dattour->email = $rq->email;
        $dattour->ngaydat =date('Y-m-d');
        $dattour->ghichu = $rq->ghichu;
        $dattour->nguoilon = $rq->nguoilon;
        $dattour->treem = $rq->treem;
        $dattour->trenho = $rq->trenho;
        $dattour->embe = $rq->embe;
        $dattour->phongdon = $rq->phongdon;
        $dattour->tongcho =  $rq->nguoilon + $rq->treem + $rq->trenho + $rq->embe;
        $dattour->tongtien =  $rq->nguoilon*$tour->gianguoilon + $rq->treem*$tour->giatreem + $rq->trenho*$tour->giatrenho + $rq->embe*$tour->giaembe + $rq->phongdon*$tour->giaphongdon;
        $dattour->hinhthucthanhtoan = $rq->hinhthucthanhtoan;
        $dattour->trangthaithanhtoan = $rq->trangthaithanhtoan;
        $dattour->save();

        $tour->sochoconlai = $tour->sochoconlai - $dattour->tongcho;
        $tour->save(); 
        return redirect('admin/dattour/danhsach')->with('thongbao','Đã sửa thành công');
    }
}
