<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{




    //
    public function userData($request)
    {
        $data['user_name'] =$request->session()->get('user_name');
        $username = $request->session()->get('user_name');
        \Log::info("username = $username");
        $data['user_id'] =$request->session()->get('user_id');
        $data['errors'] = [];
        $data['economix_url'] = 'test';
        $data['homePage'] = 'homePage';
        return $data;
    }

    public function home(Request $request)
    {
        $data = $this->userData($request);

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
    public function test(Request $request)
    {

        $data = $this->userData($request);
        $random = rand(1,4);
        if($random == 1) {
            $data['imageUrl'] = '../images/EarthRise.jpg';
            $data['message'] = 'Eco-nomix System\'s purpose is to provide the highest
            quality products to its customers that will help them improve
            their lives physically, emotionally, spirtually and economically.';
        }elseif ($random == 2){
            $data['imageUrl'] = '../images/MustardTree.jpg';
            $data['message'] = 'What we choose to do today will start out small
            like a seedling, but over time can become great for all the world to
            see.';
        }elseif($random == 3){
            $data['imageUrl'] = '../images/HandsPlant.jpg';
            $data['message'] = 'Our future is something to be planned for, prepared
            for and even nutured.  ';
        }else{
            $data['imageUrl'] = '../images/Grass.jpg';
            $data['message'] = 'The decisions we make daily in what products
            that we choose to purchase will impact not only our own lives, but
            the lives of all the people on this planet.';
        }
        return view('welcome2',$data);
    }
    public function about(Request $request)
    {
        $data = $this->userData($request);
        return view('about',$data);
    }

    public function benefits(Request $request)
    {
        $data = $this->userData($request);
        return view('benefits',$data);
    }

    public function books(Request $request)
    {
        $data = $this->userData($request);
        return view('books',$data);
    }
    public function camping(Request $request)
    {
        $data = $this->userData($request);
        return view('camping',$data);
    }
    public function charities(Request $request)
    {
        $data = $this->userData($request);
        return view('charities',$data);
    }
    public function cooking(Request $request)
    {
        $data = $this->userData($request);
        return view('cooking',$data);
    }
    public function contact(Request $request)
    {
        $data = $this->userData($request);
        return view('contact',$data);
    }

    public function discount(Request $request)
    {
        $data = $this->userData($request);
        return view('discount',$data);
    }

    public function donations(Request $request)
    {
        $data = $this->userData($request);
        return view('donations',$data);
    }
    public function economically(Request $request)
    {
        $data = $this->userData($request);
        return view('economically',$data);
    }
    public function emotionally(Request $request)
    {
        $data = $this->userData($request);
        return view('emotionally',$data);
    }
    public function energy(Request $request)
    {
        $data = $this->userData($request);
        return view('energy',$data);
    }
    public function food(Request $request)
    {
        $data = $this->userData($request);
        return view('food',$data);
    }
    public function founders(Request $request)
    {
        $data = $this->userData($request);
        return view('founders',$data);
    }
    public function groups(Request $request)
    {
        $data = $this->userData($request);
        return view('groups',$data);
    }
    public function health(Request $request)
    {
        $data = $this->userData($request);
        return view('health',$data);
    }
    public function homepage(Request $request)
    {
        $data = $this->userData($request);
        return view('homepage',$data);
    }
    public function logout(Request $request)
    {
        $data = $this->userData($request);
        return view('logout',$data);
    }
    public function members(Request $request)
    {
        $data = $this->userData($request);
        return view('members',$data);
    }
    public function money(Request $request)
    {
        $data = $this->userData($request);
        return view('money',$data);
    }

    public function people(Request $request)
    {
        $data = $this->userData($request);
        return view('people',$data);
    }
    public function physically(Request $request)
    {
        $data = $this->userData($request);
        return view('physically',$data);
    }
    public function plans(Request $request)
    {
        $data = $this->userData($request);
        return view('plans',$data);
    }

    public function products(Request $request)
    {
        $data = $this->userData($request);
        return view('products',$data);
    }
    public function purpose(Request $request)
    {
        $data = $this->userData($request);
        return view('purpose',$data);
    }
    public function recycling(Request $request)
    {
        $data = $this->userData($request);
        return view('recycling',$data);
    }
    public function referral(Request $request)
    {
        $data = $this->userData($request);
        return view('referral',$data);
    }
    public function spiritually(Request $request)
    {
        $data = $this->userData($request);
        return view('spiritually',$data);
    }
    public function training(Request $request)
    {
        $data = $this->userData($request);
        return view('training',$data);
    }
    public function water(Request $request)
    {
        $data = $this->userData($request);
        return view('water',$data);
    }

}
