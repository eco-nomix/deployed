<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;
use App\Models\TempUsers;

/**
* This is a helper class.
*/
class Helper{
	
	public static $cart_name = 'teus';

	public static function randomstr(){
		//Generate the temp ID for the Guest user
		$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

		$charLength = strlen($chars);

		$randomStr = '';

		for ($i = 0; $i < 20; $i++) { 
			$randomStr .= $chars[rand(0, $charLength - 1)];
		}

		//Check whether this random string is present in temp_user as user_id
		$is_exists = TempUsers::where('user_id',$randomStr)->first();

		if( $is_exists ){
			return $randomStr;
		}

		return $randomStr;
	}

	public static function createOrUpdateCookie($v=''){

		// Check if cookie already exists
		if( !Cookie::has(self::$cart_name) ){

			$n = self::$cart_name;
			$v = self::randomstr();
			$m = 2628000;
			$p = null;
			$d = \Request::server('HTTP_HOST');
			$s = false;
			$h = true;

	      	$setCookie = Cookie::make($n,$v,$m,$p,$d,$s,$h);

	      	Cookie::queue($setCookie);

	      	session()->put('user_id',$v);

	      	return Response('hello');

		}
		else{
			session()->put('user_id',Cookie::get(self::$cart_name));
		}
	}

	public static function getItemsFromCookie(){
		return Cookie::get(self::$cart_name);
	}

	public static function setItemsFromCookie($product_id){
		// Get current items from cookie
		$val = self::getItemsFromCookie();

		if( !$val ){
			$val = new \stdClass();
			$val->items = 0;
			$val->products = [];
		}

		if( in_array($product_id, $val->products) === false ){
			// Update values
			$val->items = (int)$val->items + 1;
			$val->products[] = $product_id;

			self::createOrUpdateCookie(json_encode($val));
		}
		$e = new Response('t');
		return $e;
		// return true;
	}

	public static function hasCookie(){
		return Cookie::has(self::$cart_name);		
	}
}