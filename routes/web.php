<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('index.html','PageController@index');
Route::get('tour.html','PageController@tour');
Route::get('thamquan.html','PageController@thamquan');
Route::get('diemthamquan.html','PageController@diemthamquan');
Route::get('chitiettour/{id}/{tenkhongdau}.html','PageController@chitiettour');

use App\Tour;
use App\Diemdi;
use App\Anhtour;
use App\Khachsan;
use App\Huongdanvien;

Route::get('thu3',function(){
	$tour = Tour::find(1);
	
		# code...
		echo $tour->anhtour->bg1."</br>";
	
});

Route::get('thu1',function(){
	$anhtour = Anhtour::find(1);
	
		# code...
		echo $anhtour->tour->tieude."</br>";
	
});

Route::get('thu2',function(){
	$khachsan = Khachsan::find(1);
	foreach ($khachsan->tour as $tour) {
		# code...
		echo $tour->tieude."</br>";
	}
});

Route::get('thu4',function(){
	$tour = Tour::find(1);
	
		# code...
		echo $tour->khachsan->ten."</br>";
	
});

Route::get('thu5',function(){
	$Huongdanvien = Huongdanvien::find(1);
	foreach ($Huongdanvien->tour as $tour) {	
		# code...
	}	echo $tour->lichtrinh."</br>";
	
});

