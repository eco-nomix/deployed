<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function home()
    {
        $data['errors'] = [];
        $data['role'] = '';
        $data['user_name'] = 'Jay Potter';
        $data['economix_url'] = 'test';
        $data['homePage'] = 'homePage';
        $random = rand(0,3);
        if($random == 0) {
            $data['imageUrl'] = '../images/Depositphotos_15642717_l-2015.jpg';
            $data['message'] = 'Eco-nomix System\'s purpose is to provide the highest
            quality products to its customers that will help them improve
            their lives physically, emotionally, spirtually and economically.';
        }elseif ($random == 1){
            $data['imageUrl'] = '../images/Depositphotos_11044053_l-2015.jpg';
            $data['message'] = 'What we choose to do today will start out small
            like a seedling, but over time can become great for all the world to
            see.';
        }elseif($random == 2){
            $data['imageUrl'] = '../images/Depositphotos_16370783_l-2015.jpg';
            $data['message'] = 'Our future is something to be planned for, prepared
            for and even nutured.  ';
        }else{
            $data['imageUrl'] = '../images/Depositphotos_2657114_l-2015.jpg';
            $data['message'] = 'The decisions we make daily in what products
            that we choose to purchase will impact not only our own lives, but
            the lives of all the people on this planet.';
        }
        return view('welcome',$data);
    }
}
