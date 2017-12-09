<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Cookie;
use App\Helpers\Helper;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){
    	/** 
        *  Set shopping cart cookie while initiating application
        *  Check first whether shopping cart cookie is already set or not
        */
      	$user_in_session = session()->get('user_id');

    		if( !$user_in_session ){
      		Helper::createOrUpdateCookie();
      	}
    }
}
