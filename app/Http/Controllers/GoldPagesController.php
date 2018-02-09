<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\ProductGroups;
use App\Models\Products;
use App\Models\UserStores;
use App\Models\ShoppingCarts;
use App\Models\RegistrationStatus;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoldPagesController extends Controller
{




    //
    public function userData($request)
    {


        $ecosponsor    = $request->cookie('ecosponsor');
        $data['ecosponsor'] = $ecosponsor;
        \Log::info("ecosponsor = $ecosponsor");
        $data['user_name'] =$request->session()->get('user_name');
        $data['username'] =$request->session()->get('username');
        $username = $request->session()->get('user_name');
        $roles = $request->session()->get('userRoles');
        \Log::info("username = $username");
        $data['user_id'] =$request->session()->get('user_id');
        $userId = $request->session()->get('user_id');
        $user = Users::find($userId);
        if($user){
            $referralLink = "http://eco-nomix.org/referred/$user->id";
        }else{
            $referralLink = "Not Logged in";
        }
        $data['referral_link']= $referralLink;
        $data['errors'] = [];
        $data['userRoles'] = $roles;
        $data['economix_url'] = 'test';
        $data['homePage'] = 'homePage';
        $data['title'] = '';
        $data['description'] = '';
        return $data;
    }

    public function gold(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Eco-Gold';
        $data['description'] = 'Eco-Gold Blockchain';

        return view('gold',$data);
    }
    public function whitepaper(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Eco-Gold';
        $data['description'] = 'White Paper';

        return view('goldwhitepaper',$data);
    }


}
