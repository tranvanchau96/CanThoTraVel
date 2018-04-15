<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;


class UserController extends Controller
{
    //
    public function getLogin(){
    	return view('admin.login');
    }

    public function postLogin(Request $rq){
    	$this->validate($rq,[
    		'name' => 'required',
    		'password' => 'required'
    		],[
    		'name.required' => 'Bạn chưa nhập Username',
    		'password.required' => 'Bạn chưa nhập Password'
    		]);
    	if(Auth::attempt(['name'=>$rq->name,'password'=>$rq->password])) {
    		return redirect('admin/tour/danhsach');
    	}
    	else {
    		return redirect('admin/login')->with('thongbao','Đăng nhập thất bại');
    	}
    }

    public function getLogout(){
    	Auth::logout();
    	return redirect('admin/login');
    }
}
