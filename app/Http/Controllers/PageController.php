<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\Gmaps_geocaches;
use App\Tour;
use App\Diemthamquan;
use App\Dattour;
use App\Diemdi;
use App\Toado;
use GMaps;
class PageController extends Controller
{
    //DÙNG GET() -> COLLECTION NÊN PHẢI DÙNG FOREACH
    //DÙNG FIND(), FRIST() -> ĐỐI TƯỢNG NÊN CÓ THỂ LẤY THUỘC TÍNH DỄ DÀNG


    function index(){
    	$tour = Tour::orderBy('id','desc')->take(4)->get();
    	return view('pages.index',['tour'=>$tour]);
    }
    function tourtim($id){
    	$tour = Tour::where('id_diemdi',$id)->orderBy('id','desc')->get();
       $diemdi = Diemdi::orderBy('tendiemdi')->get();

    	return view('pages.toursearch',['tour'=>$tour,'diemdi'=>$diemdi]);
    }
    function tour(){
        $tour = Tour::orderBy('id','desc')->get();
        $diemdi = Diemdi::orderBy('tendiemdi')->get();
        return view('pages.tour',['tour'=>$tour,'diemdi'=>$diemdi]);
    }

    function thamquan(){
        $thamquan = Diemthamquan::all();
        return view('pages.thamquan',['thamquan'=>$thamquan]);
    }

    function chitiettour($id){
        // $gmaps_geocache = Gmaps_geocaches::where('id_tour',$id)->get();
        $toado = Toado::where('id_tour',$id)->get();
        $tour = Tour::find($id);
        $tourmoinhat=Tour::orderBy('id','desc')->take(3)->get();
        
        $diemthamquandexuat = Diemthamquan::inRandomOrder()->take(3)->get();
        
       

        $config = array();
        $config['center'] = 'Can Tho';
        $config['zoom'] = '12';
        
        $config['geocodeCaching'] = true;

        $config['scrollwheel'] = false;

        GMaps::initialize($config);

        foreach ($toado as $tdo) {
            $add = $tdo->gmaps_geocache->address;
            $marker['position'] = $add;
            GMaps::add_marker($marker);
       
        }
        $map = GMaps::create_map(); 

        return view('pages.chitiettour',['tour'=> $tour,'tourmoinhat'=>  $tourmoinhat,'diemthamquandexuat'=>$diemthamquandexuat])->with('map',$map);
    }

    function diemthamquan($id){
        $diemthamquan = Diemthamquan::find($id);
        $diemthamquandexuat = Diemthamquan::inRandomOrder()->take(3)->get();

        return view('pages.diemthamquan',['diemthamquan'=>$diemthamquan,'diemthamquandexuat'=>$diemthamquandexuat]);
    }

    function dattour($id){
        $tour = Tour::find($id);
        $tourmoinhat=Tour::orderBy('id','desc')->take(3)->get();
        $diemthamquandexuat = Diemthamquan::inRandomOrder()->take(3)->get();
        return view('pages.dattour',['tour'=> $tour,'tourmoinhat'=>  $tourmoinhat,'diemthamquandexuat'=>$diemthamquandexuat]);
    }
      function insert(Request $rq, $id){
        $tour = Tour::find($id);
        $dattour  = new Dattour;
        $dattour->id_tour = $tour->id;
        $dattour->hoten = $rq->hoten;
        $dattour->diachi = $rq->diachi;
        $dattour->sodienthoai = $rq->sodienthoai;
        $dattour->email = $rq->email;
        $dattour->ngaydat =date('Y-m-d');
        $dattour->ghichu = $rq->ghichu;
        $dattour->nguoilon = $rq->songuoilon;
        $dattour->treem = $rq->sotreem;
        $dattour->trenho = $rq->sotrenho;
        $dattour->embe = $rq->soembe;
        $dattour->phongdon = $rq->phongdon;
        $dattour->tongcho =  $rq->songuoilon + $rq->sotreem + $rq->sotrenho + $rq->soembe;
        $dattour->tongtien =  $rq->songuoilon*$tour->gianguoilon + $rq->sotreem*$tour->giatreem + $rq->sotrenho*$tour->giatrenho + $rq->soembe*$tour->giaembe + $rq->phongdon*$tour->giaphongdon;
        $dattour->hinhthucthanhtoan = $rq->htthanhtoan;
        $dattour->trangthaithanhtoan = "Chưa thanh toán";
        $dattour->save();

        $tour->sochoconlai = $tour->sochoconlai - $dattour->tongcho;
        $tour->save();
        return redirect()->route('success',[$id]);
    }

    function success($id){
        $tour = Tour::find($id);
        
        $tourmoinhat=Tour::orderBy('id','desc')->take(3)->get();
        $diemthamquandexuat = Diemthamquan::inRandomOrder()->take(3)->get();
        $dattour = Dattour::orderBy('id','desc')->first();
        $tientra  = $dattour->tongtien*25/100;
        return view('pages.success',['tour'=> $tour,'tourmoinhat'=>  $tourmoinhat,'diemthamquandexuat'=>$diemthamquandexuat, 'dattour'=>$dattour, 'tientra'=>$tientra]);
    }
   
   

}



