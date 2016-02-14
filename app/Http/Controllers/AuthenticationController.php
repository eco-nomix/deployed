<?php

namespace App\Http\Controllers;
use Mail;
use Crypt;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthenticationController extends Controller
{

    public function login(Request $request)
    {
        $userName = $request->input('user_name');
        $data['username']=$userName;
        $data['reset'] = '';
        $data['user_name']='';
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

        $userName = $request->input('username');
        $password = $request->input('password');
        $reset = $request->input('Reset');
        if($reset != ""){
            return $this->resetPassword($userName);
        }

        $user = $this->membership($userName, $password);
        \Log::info("userName=$userName  password=$password");

        if ($user){
            return  $this->finishMemberLogin($user, $request);
        }
        else{
            \Log::info("not a member -didnt find it");
        }
        $user = $this->registered($userName, $password);
        if ($user){
            return $this->finishRegistering($user, $request);
        }
        $data = $this->baseData();
        $user = Users::where('user_name', $userName)
            ->first();
        if ($user){
            $data['reset'] = 'yes';
            \Log::info("found username");
        }
        else
        {
            $data['reset'] = '';
            \Log::info("didnt find username");
        }
        \Log::info("reset=$reset");

        $data['user_name'] = '';
        $data['username'] = $userName;
        $data['user_id'] = '';
        $data['errors'] = 'Password or Username incorrect';
        \Log::info("exit 2");
        return view('login',$data);
    }

    public function membership($userName, $password)
    {
        $user = Users::where('user_name', $userName)
            ->where('member',1)
            ->where('password',$password)->first();
        return $user;

    }

    public function registered($userName, $password)
    {
        \Log::info("in registers");
        $user = Users::where('user_name', $userName)
            ->where('password',$password)->first();
        return $user;

    }
    public function finishMemberLogin($user, Request $request)
    {
        \Log::info("in finish MemberLogin");
        \Log::info("ok first=$user->first_name");
        $username = $user->first_name.' '.$user->last_name;
        $request->session()->set('user_name', $username);
        $request->session()->set('user_id', $user->id);
        $request->session()->save();

        \Log::info("user_name set to $user->first_name+");
        $data = $this->basedata();
        $data['user_name'] = $username;
        $data['user_id'] = $user->id;
        \Log::info("exit 1");
        return view('welcome2',$data);
    }
    public function finishRegistering(Request $request)
    {
        \Log::info("in finishRegistering");

        $reminder = "this is my reminder message";
        $users = new Users;
        $user = $users->checkForRegistration($request);
        if($user){
            if($user->member == 5){
                return $this->memberConfirmed($user);
            }
        }else{
            //not registered -  verify email
            $user = $this->initialRegistration($request);
            $this->emailConfirmation($user);
            return $this->verifyEmail($user);
        }
        $data = $this->basedata();
        $data['username'] = '';
        $data['user_name'] = '';
        $data['user_id'] = '';
        \Log::info("exit 1");
        return view('register2',$data);
    }

    public function prepayment(Request $request)
    {
        \Log::info("in prepayment");
        $data = $this->basedata();
        $data['username'] = '';
        $data['user_name'] = '';
        $data['user_id'] = '';
        \Log::info("exit 1");
        return view('payment',$data);
    }

    public function payment(Request $request)
    {
        \Log::info("in payment");
        $data = $this->basedata();
        $data['username'] = '';
        $data['user_name'] = '';
        $data['cardnumber'] = 'ending with 1036';
        $data['user_id'] = '';
        \Log::info("exit 1");
        return view('thankyou',$data);
    }


    public function register(Request $request)
    {
        \Log::info('in register');
        $data['user_name']='';
        $data['user_id'] = '';
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
            $data['user_name'] = '';
            $data['user_id'] = '';
            \Log::info("exit 3");
            return view('reset',$data);
        }
        else{
            \Log::info("No matching username = $userName");
            $data['user_name'] = '';
            $data['user_id'] = '';
            $data['username']=$userName;
            $data['errors'] = 'UserName not in system';
            \Log::info("exit 4");
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

    public function sendEmailReminder($user, $reminder)
    {
        Mail::send('emails.reminder', ['user' => $user], function ($message) use ($user, $reminder) {
            $pathToImage = "/images/Economix3731_Fotor.jpg";
            $message->from('admin@eco-nomix.com', 'Admin');
            $message->subject('Reminder');
            $username = $user->first_name.' '.$user->last_name;
            $testemail = 'jpotter747@yahoo.com';
            $message->to($testemail, $username)->subject('Your Reminder!');
            //$message->sender($address,$name);
            //$message->cc($address,$name);
            //$message->bcc($address,$name);
            //$message->replyTo($address,$name);
            //$message->priority($level);
            //$message->attach($pathtoFile, array $options=[]);
            //      $options = ['as'=>$display,'mime'=$mime];
            //$message->attachData($data,$name,array $options=[]);
            //$message->getSwiftMessage();
        });
    }

    public function emailVerified($key,Request $request)
    {
        $memberId = Crypt::decrypt($key);
        \Log::info("memberId = $key");

    }
    public function emailConfirmation($user)
    {
        \Log::info("in email Confirmation ");
        $image = '/images/Economix3731_Fotor.jpg';


        Mail::send('emails.email_verification', ['user' => $user,'image'=>$image], function ($message) use ($user, $image) {
            $pathToImage = "/images/Economix3731_Fotor.jpg";
            $message->from('admin@eco-nomix.org', 'Admin');
            $message->subject('Email Verification');
            $message->sender('admin@eco-nomix.org');
            $username=$user->first_name.' '.$user->last_name;
            $message->to($user->email, $username);
            $message->subject('Email Verification!');
        });
    }
    public function memberConfirmed($user)
    {
        $data= $this->basedata();
        $data['username'] = '';
        $data['user_name'] = '';
        $data['user_id'] = '';
        $data['email'] = $user->email;
        \Log::info("already a full member");
        return view('membership_confirmed',$data);
    }

    public function initialRegistration(Request $request)
    {
        $user = new Users;
        $user->email =$request->input('email');
        $user->user_name = $request->input('username');
        $user->password = $request->input('password');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->member = 1;
        $user->save();
        $user->user_link =  Crypt::encrypt($user->id);
        $user->save();
        return $user;
    }

    public function verifyEmail($user)
    {
        $data= $this->basedata();
        $data['username'] = '';
        $data['user_name'] = '';
        $data['user_id'] = '';
        $data['email'] = $user->email;
        return view('email_verification',$data);
    }

}
