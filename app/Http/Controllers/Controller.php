<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
class Controller extends BaseController
{
    use AuthorizesRequests ,DispatchesJobs, ValidatesRequests;

     function __construct(){
    	$this->checkLogin();
    }
     function checkLogin(){
    	if(Auth::check()) {
    		view()->share('user',Auth::user());
    	}
    	// $this->user = Auth::user();
     //        $this->signed_in = Auth::check();

     //        view()->share('signed_in', $this->signed_in);
     //        view()->share('user', $this->user);
    }
}
