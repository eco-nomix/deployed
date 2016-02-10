<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthenticationController extends Controller
{




    //


    public function login(Request $request)
    {
        $userName = $request->input('user_name');
        $data['user_name']=$userName;
        $data['errors'] = '';
        return view('login',$data);
    }

    public function logout2(Request $request)
    {
        $this->clearSession($request);
        $data = $this->baseData();
        $data['user_name'] = '';
        $data['user_id'] = '';
        return view('welcome2',$data);
    }

    public function verify(Request $request)
    {
        \Log::info("in verify");
        $userName = $request->input('user_name');
        $password = $request->input('password');
        $reset = $request->input('Reset');
        if($reset != ""){
            $this->resetPassword($userName);
        }
        \Log::info("userName=$userName  password=$password");
        $user = Users::where('user_name', $userName)
            ->where('password',$password)->first();
        if ($user){
            $username = $user->first_name.' '.$user->last_name;
            $request->session()->set('user_name', $username);
            $request->session()->set('user_id', $user->id);
            $request->session()->save();

            \Log::info("user_name set to $user->first_name+");
            $data = $this->basedata();
            $data['user_name'] = $username;
            $data['user_id'] = $user->id;
            return view('welcome2',$data);
        }

        \Log::info("reset=$reset");
        $data = $this->userData($user);
        $data['user_name'] = '';
        $data['user_id'] = '';
        $data['errors'] = 'Password or Username incorrect';
        return view('login',$data);
    }
    public function register(Request $request)
    {
        \Log::info('in register');
        $data['errors']= [] ;
        return view('register',$data);
    }

    public function resetPassword($userName)
    {
        \Log::info("in resetPassword");
        $user = Users::where('user_name', $userName)->first();
        if($user){
            \Log::info("matching username = $userName");
            $email = $user->email;
            \Log::info("email=$email");
            $data['email'] = $email;
            return view('reset',$data);
        }
        else{
            \Log::info("No matching username = $userName");
            $data['user_name']=$userName;
            $data['errors'] = 'UserName not in system';
            return view('login',$data);
        }

    }

    public function baseData()
    {
        $data['errors'] = [];
        $data['imageUrl'] = '../images/EarthRise.jpg';
        $data['message'] = 'Eco-nomix System\'s purpose is to provide the highest
            quality products to its customers that will help them improve
            their lives physically, emotionally, spirtually and economically.';
        return $data;
    }

    public function clearSession(Request $request)
    {
        $request->session()->set('user_name', '');
        $request->session()->set('user_id','');
        $request->session()->save();
    }


}
