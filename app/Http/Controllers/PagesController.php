<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function userData()
    {
        $data['errors'] = [];
        $data['route'] = 'test';
        $data['user_name'] = 'Jay Potter';
        $data['user_home'] = '1';
        $data['user_money'] = '1';
        $data['economix_url'] = 'test';
        $data['homePage'] = 'homePage';
        return $data;
    }

    public function home()
    {
        $data = $this->userData();

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
    public function test()
    {

        $data = $this->userData();
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
    public function about()
    {
        $data = $this->userData();
        return view('about',$data);
    }

    public function books()
    {
        $data = $this->userData();
        return view('books',$data);
    }
    public function camping()
    {
        $data = $this->userData();
        return view('camping',$data);
    }
    public function charities()
    {
        $data = $this->userData();
        return view('charities',$data);
    }
    public function cooking()
    {
        $data = $this->userData();
        return view('cooking',$data);
    }
    public function contact()
    {
        $data = $this->userData();
        return view('contact',$data);
    }

    public function discount()
    {
        $data = $this->userData();
        return view('discount',$data);
    }

    public function donations()
    {
        $data = $this->userData();
        return view('donations',$data);
    }
    public function economically()
    {
        $data = $this->userData();
        return view('economically',$data);
    }
    public function emotionally()
    {
        $data = $this->userData();
        return view('emotionally',$data);
    }
    public function energy()
    {
        $data = $this->userData();
        return view('energy',$data);
    }
    public function food()
    {
        $data = $this->userData();
        return view('food',$data);
    }
    public function founders()
    {
        $data = $this->userData();
        return view('founders',$data);
    }
    public function groups()
    {
        $data = $this->userData();
        return view('groups',$data);
    }
    public function health()
    {
        $data = $this->userData();
        return view('health',$data);
    }
    public function homepage()
    {
        $data = $this->userData();
        return view('homepage',$data);
    }
    public function logout()
    {
        $data = $this->userData();
        return view('logout',$data);
    }
    public function members()
    {
        $data = $this->userData();
        return view('members',$data);
    }
    public function money()
    {
        $data = $this->userData();
        return view('money',$data);
    }

    public function people()
    {
        $data = $this->userData();
        return view('people',$data);
    }
    public function physically()
    {
        $data = $this->userData();
        return view('physically',$data);
    }
    public function plans()
    {
        $data = $this->userData();
        return view('plans',$data);
    }

    public function products()
    {
        $data = $this->userData();
        return view('products',$data);
    }
    public function purpose()
    {
        $data = $this->userData();
        return view('purpose',$data);
    }
    public function recycling()
    {
        $data = $this->userData();
        return view('recycling',$data);
    }
    public function referral()
    {
        $data = $this->userData();
        return view('referral',$data);
    }
    public function spiritually()
    {
        $data = $this->userData();
        return view('spiritually',$data);
    }
    public function training()
    {
        $data = $this->userData();
        return view('training',$data);
    }
    public function water()
    {
        $data = $this->userData();
        return view('water',$data);
    }

}
