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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Tour;
use App\Diemdi;
use App\Anhtour;
use App\Khachsan;
use App\Huongdanvien;
use App\Dattour;


Route::get('/','PageController@index');

Route::get('index.html','PageController@index');

Route::get('tour.html','PageController@tour');

Route::get('tour/tim/{id}.html','PageController@tourtim');

Route::get('/map', 'MapController@index');
Route::get('chitiettour/{id}/{tenkhongdau}.html','PageController@chitiettour');


Route::get('thamquan.html','PageController@thamquan');
Route::get('diemthamquan/{id}/{tenkhongdau}.html','PageController@diemthamquan');
Route::get('dattour/{id}/{tenkhongdau}.html','PageController@dattour');
Route::post('insert/{id}','PageController@insert');
Route::get('success/{id}.html','PageController@success')->name('success');


Route::get('admin/login','UserController@getLogin');
Route::post('admin/login','UserController@postLogin');

Route::get('admin/logout','UserController@getLogout');


Route::group(['prefix'=>'admin','middleware'=>'adminLogin'], function(){
	
	Route::group(['prefix'=>'anhtour'], function(){
		Route::get('danhsach','AnhtourController@getDanhSach');

		Route::get('sua/{id}','AnhtourController@getSua');
		Route::post('sua/{id}','AnhtourController@postSua');
	});

	Route::group(['prefix'=>'dattour'], function(){
		Route::get('danhsach','DattourController@getDanhSach');

		Route::get('sua/{id}','DattourController@getSua');
		Route::post('sua/{id}','DattourController@postSua');

		Route::get('xoa/{id}','DattourController@getXoa');
		
	});

	Route::group(['prefix'=>'diemdi'], function(){
		Route::get('danhsach','DiemdiController@getDanhSach');

		Route::get('sua/{id}','DiemdiController@getSua');
		Route::post('sua/{id}','DiemdiController@postSua');

		Route::get('them','DiemdiController@getThem');
		Route::post('them','DiemdiController@postThem');

		Route::get('xoa/{id}','DiemdiController@getXoa');
	});

	Route::group(['prefix'=>'diemthamquan'], function(){
		Route::get('danhsach','DiemthamquanController@getDanhSach');

		Route::get('sua/{id}','DiemthamquanController@getSua');
		Route::post('sua/{id}','DiemthamquanController@postSua');

		Route::get('them','DiemthamquanController@getThem');
		Route::post('them','DiemthamquanController@postThem');

		Route::get('xoa/{id}','DiemthamquanController@getXoa');
	});

	Route::group(['prefix'=>'gmaps_geocache'], function(){
		Route::get('danhsach','GmapsController@getDanhSach');

		Route::get('sua/{id}','GmapsController@getSua');
		Route::post('sua/{id}','GmapsController@postSua');

		Route::get('them','GmapsController@getThem');
		Route::post('them','GmapsController@postThem');

		Route::get('xoa/{id}','GmapsController@getXoa');
	});

	Route::group(['prefix'=>'toado'], function(){
		Route::get('danhsach','ToadoController@getDanhSach');

		
		Route::get('them','ToadoController@getThem');
		Route::post('them','ToadoController@postThem');

		Route::get('xoa/{id}','ToadoController@getXoa');
	});

	Route::group(['prefix'=>'huongdanvien'], function(){
		Route::get('danhsach','HuongdanvienController@getDanhSach');
		
		Route::get('sua/{id}','HuongdanvienController@getSua');
		Route::post('sua/{id}','HuongdanvienController@postSua');
		
		Route::get('them','HuongdanvienController@getThem');
		Route::post('them','HuongdanvienController@postThem');

		Route::get('xoa/{id}','HuongdanvienController@getXoa');
	});

	Route::group(['prefix'=>'khachsan'], function(){
		Route::get('danhsach','KhachsanController@getDanhSach');

		Route::get('sua/{id}','KhachsanController@getSua');
		Route::post('sua/{id}','KhachsanController@postSua');

		Route::get('them','KhachsanController@getThem');
		Route::post('them','KhachsanController@postThem');

		Route::get('xoa/{id}','KhachsanController@getXoa');
	});

	Route::group(['prefix'=>'tour'], function(){
		Route::get('danhsach','TourController@getDanhSach');
		
		Route::get('sua/{id}','TourController@getSua');
		Route::post('sua/{id}','TourController@postSua');

		Route::get('them','TourController@getThem');
		Route::post('them','TourController@postThem');

		Route::get('themchitiettour','TourController@getThemchitiettour');
		Route::post('themchitiettour/{id}','TourController@postThemchitiettour');

		Route::get('xoa/{id}','TourController@getXoa');
	});

	Route::group(['prefix'=>'quangcao'], function(){
		Route::get('danhsach','QuangcaoController@getDanhSach');

		Route::get('sua/{id}','QuangcaoController@getSua');
		Route::post('sua/{id}','QuangcaoController@postSua');

		Route::get('them','QuangcaoController@getThem');
		Route::post('them','QuangcaoController@postThem');

		Route::get('xoa/{id}','QuangcaoController@getXoa');
	});

	Route::group(['prefix'=>'ajax'],function(){
		Route::get('gmaps/{id_tour}','AjaxController@getGmaps');
	});
});



// MAIL sandboxcdfd7e6e9ae74d0c8e9227b587c3aa42.mailgun.org
// API KEY key-ce18653124e7494a5d87b9d2321e5db0