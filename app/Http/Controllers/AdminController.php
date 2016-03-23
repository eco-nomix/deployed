<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\ProductGroups;
use App\Models\Products;
use App\Models\ShoppingCarts;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{




    //

    public function addProduct($productId, Request $request)
    {
        $data = $this->userData($request);


        return view('addProduct',$data);
    }
    public function editUser($userId,Request $request)
    {
        $data = $this->userData($request);
        $editUser = Users::find($userId);

        $data['user_id'] = $userId;
        $data['username'] = $editUser->user_name;
        $data['password'] = $editUser->password;
        $data['first_name'] = $editUser->first_name;
        $data['last_name'] = $editUser->last_name;
        $data['email'] = $editUser->email;
        $data['home_phone']= $editUser->home_phone;
        $data['cell_phone'] = $editUser->cell_phone;
        $data['addr1'] = $editUser->addr1;
        $data['addr2'] = $editUser->addr2;
        $data['city'] = $editUser->city;
        $data['state'] = $editUser->state;
        $data['postal_code'] = $editUser->postal_code;
        $data['country'] = $editUser->country;
        $data['social_security'] = $editUser->social_security;


        return view('editUser',$data);
    }

    public function updateUser($userId,Request $request)
    {

        $editUser = Users::find($userId);
        $editUser->user_name = $request->input('username');
        $editUser->password = $request->input('password');
        $editUser->first_name = $request->input('first_name');
        $editUser->last_name = $request->input('last_name');
        $editUser->email = $request->input('email');
        $editUser->home_phone = $request->input('home_phone');
        $editUser->cell_phone = $request->input('cell_phone');
        $editUser->addr1 = $request->input('addr1');
        $editUser->addr2 = $request->input('addr2');
        $editUser->city = $request->input('city');
        $editUser->state = $request->input('state');
        $editUser->postal_code = $request->input('postal_code');
        $editUser->country = $request->input('country');
        $editUser->social_security = $request->input('social_security');
        $editUser->save();
        $data = $this->userData($request);
        $data['selectNames'] = '';
        return view('management',$data);
    }

    public function search(Request $request)
    {
        \Log::info("in search");
        $lastName = $request->input('last_name');
        \Log::info("lastname=$lastName");
        $users = Users::where('last_name',$lastName)->get();

        $result = "<option value=''>select User</option>";
        foreach($users as $user){
            $result .= "<option value='$user->id'>$user->first_name $user->last_name</option>";
        }

        $data = $this->userData($request);
        $data['selectNames'] = $result;
        return view('management',$data);
    }

    public function management(Request $request)
    {
        $data = $this->userData($request);
        $data['selectNames'] = '';
        return view('management',$data);
    }

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
        $data['errors'] = [];
        $data['userRoles'] = $roles;
        $data['economix_url'] = 'test';
        $data['homePage'] = 'homePage';
        return $data;
    }
}
