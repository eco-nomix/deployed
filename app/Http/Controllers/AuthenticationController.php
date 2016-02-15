<?php

namespace App\Http\Controllers;
use Mail;
use Crypt;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Products;
use App\Models\UserRoles;
use App\Models\SalesTransactions;
use App\Models\SalesTransactionDetails;
use App\Models\CustomerCreditCards;

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
        $data['userRoles'] = [];
        $data['errors'] = '';
        return view('login',$data);
    }

    public function logout2(Request $request)
    {
        $this->clearSession($request);

        $data = $this->baseData();
        $data['user_name'] = '';
        $data['userRoles'] = [];
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

        $user = $this->membershipStatus($userName, $password);
        \Log::info("userName=$userName  password=$password");
        if(!$user){
            return $this->notValidLogin($request);
        }
        if ($user){
            if($user->member>1){
                $request->session()->set('user_id', $user->id);
            }
            if($user->member == 5) {
                return $this->finishMemberLogin($user, $request);
            }
            if($user->member ==1){
                return $this->verificationSent($user,$request);
            }
            $data = $this->basedata();
            $data['username'] = '';
            $data['user_name'] = '';
            $data['user_id'] = '';
            $data['userId'] = $user->id;
            \Log::info("exit 1");
            return view('welcome2',$data);
        }
    }

    public function notValidLogin($request)
    {
        $user = Users::where('user_name', $userName)
        ->first();
        if ($user){
            $data['reset'] = 'yes';
            \Log::info("found username");
        }else{
            $data['reset'] = '';
        }
        $data['user_name'] = '';
        $data['username'] = $userName;
        $data['userRoles'] = [];
        $data['user_id'] = '';
        $data['errors'] = 'Password or Username incorrect';
        \Log::info("exit 2");
    return view('login',$data);
    }



    public function verificationSent($user,$request)
    {
        \Log::info("email was Sent");

    }

    public function membershipStatus($userName, $password)
    {
        $user = Users::where('user_name', $userName)
           ->where('password',$password)->first();
        return $user;
    }

    public function finishMemberLogin($user, Request $request)
    {
        $username = $user->first_name.' '.$user->last_name;
        $roles = $this->getUserRoles($user);
        $request->session()->set('user_name', $username);
        $request->session()->set('user_id', $user->id);
        $request->session()->set('userRoles',$roles);
        $request->session()->save();

        $data = $this->basedata();
        $data['user_name'] = $username;
        $data['userRoles'] = $roles;
        $data['user_id'] = $user->id;
        \Log::info("exit 1");
        return view('welcome2',$data);
    }

    public function getUserRoles($user)
    {
        $roles = UserRoles::select('role_id')->where('user_id',$user->id)
            ->orderby('role_id')->get();
        $userRoles=[];
        for($x=1;$x<15;$x++)
        {
            $userRoles[$x]='';
        }
        foreach($roles as $role)
        {
            $userRoles[$role->role_id]='yes';
        }
        return $userRoles;
    }

    public function register(Request $request)
    {
        \Log::info('in register');

        $data['user_name']='';
        $data['user_id'] = '';
        $data['userRoles'] = [];
        $data['errors']= [] ;
        $userId = $request->session()->get('user_id');
        if($userId){
            $user = Users::find($userId);
            if ($user) {
                if ($user->member == 2) {
                    $data = $this->basedata();
                    $data['username'] = '';
                    $data['user_name'] = '';
                    $data['userRoles'] = [];
                    $data['user_id'] = $userId;
                    \Log::info("exit 1");
                    return view('register2', $data);
                }
                if ($user->member == 3) {
                    $data = $this->basedata();
                    $data['username'] = '';
                    $data['user_name'] = '';
                    $data['userRoles'] = [];
                    $data['user_id'] = $userId;
                    \Log::info("exit 1");
                    return view('payment', $data);
                }
                if ($user->member == 4) {
                    $data = $this->basedata();
                    $data['username'] = $user->first_name.' '.$user->last_name;
                    $data['user_name'] = '';
                    $data['user_id'] = $userId;
                    $data['userRoles'] = [];
                    $data['userId'] = $user->id;
                    \Log::info("exit 1");
                    return view('awaiting_payment', $data);
                }
                if ($user->member == 5) {

                    $data = $this->basedata();
                    $data['username'] = '';
                    $data['user_name'] = '';
                    $data['userRoles'] = [];
                    $data['user_id'] = $userId;
                    \Log::info("exit 1");
                    return view('registration_complete', $data);
                }
            }

        }

        return view('register',$data);
    }




    public function finishRegistering(Request $request)
    {
        \Log::info("in finishRegistering");


        $users = new Users;
        $user = $users->checkForRegistration($request);
        if($user){
            if($user->member == 5){
                return $this->memberConfirmed($user, $request);
            }
        }else{
            $user = $users->checkForUserName($request);
            if($user){
                $data['errors'] = 'Username has already been used';
                $data = $this->basedata();
                $data['username'] = '';
                $data['user_name'] = '';
                $data['userRoles'] = [];
                $data['user_id'] = '';
                return view('register',$data);
            }
            //not registered -  verify email
            $user = $this->initialRegistration($request);
            $this->emailConfirmation($user);
            return $this->verifyEmail($user);
        }
        $data = $this->basedata();
        $data['username'] = '';
        $data['user_name'] = '';
        $data['userRoles'] = [];
        $data['user_id'] = '';
        \Log::info("exit 1");
        return view('register2',$data);
    }

    public function prepayment(Request $request)
    {
        \Log::info("in prepayment");
        $userId = $request->session()->get('user_id');
        $payMethod = $request->input('paymethod');


        if($userId){
            $user = Users::find($userId);
            if ($user->member >2 && $user->member<5){
                $homePhone = $request->input('home_phone');
                $cellPhone = $request->input('cell_phone');
                $addr1 = $request->input('addr1');
                $addr2 = $request->input('addr2');
                $city = $request->input('city');
                $state = $request->input('state');
                $country = $request->input('country');
                $postalCode = $request->input('postal_code');
                $socialSecurity = $request->input('social_security');
                $user->home_phone = $homePhone;
                $user->cell_phone = $cellPhone;
                $user->addr1 = $addr1;
                $user->addr2 = $addr2;
                $user->city = $city;
                $user->state = $state;
                $user->country = $country;
                $user->postal_code = $postalCode;
                $user->social_security = $socialSecurity;
                $user->member = 3;
                $user->save();
            }
            if($payMethod == 'Mail'){
                $data['username'] = $user->first_name.' '.$user->last_name;
                $data['user_name'] = '';
                $data['user_id'] = '';
                $data['userRoles'] = [];
                $data['userId'] = $user->id;
                \Log::info("exit 1");
                $user->member = 4;
                $user->save();
                return view('awaiting_payment',$data);
            }
            $data = $this->basedata();
            $data['username'] = '';
            $data['user_name'] = '';
            $data['userRoles'] = [];
            $data['user_id'] = '';
            \Log::info("exit 1");
            return view('payment',$data);
        }
    }

    public function processPayment($user, $cc, $productId)
    {

        $newTrans = $this->newTransaction($user->id);
        $role = 2;
        $productId = 1;
        $payBonus = 1;
        $newTrans = $this->loadProductInTransaction($newTrans, $user->id, $role, $productId);
        return $newTrans;
    }

    public function payment(Request $request)
    {
        $userId = $request->session()->get('user_id');
        if($userId) {
            $user = Users::find($userId);
            $cc = $this->saveCardInfo($request,$user);
            $productId = 1;

            $trans = $this->processPayment($user,$cc,$productId);
            $user->member = 5;
            $user->save();
            $data = $this->basedata();
            $username = $user->first_name . ' ' . $user->last_name;
            $request->session()->set('user_name', $username);
            $request->session()->set('user_id', $user->id);
            $request->session()->save();
            $data = $this->basedata();
            $data['user_name'] = $username;
            $data['charge'] = $trans->total_order;
            $data['cardnumber'] = "xxx...".substr($cc->credit_card_number,-4);
            $data['user_id'] = $user->id;
            $data['username'] = $username;
            $data['email'] = $user->email;
            return view('thankyou', $data);
        }
    }

    public function saveCardInfo($request,$user)
    {
        $cc = new CustomerCreditCards;
        $cc->name_on_card = $request->input('billing_name');
        $cc->credit_card_number = $request->input('credit_card');
        $cc->exp_month = $request->input('month');
        $cc->exp_year = $request->input('year');
        $cc->security_code = $request->input('security_code');
        $cc->user_id = $user->id;
        $cc->save();
        return $cc;

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
            $data['userRoles'] = [];
            $data['user_id'] = '';
            \Log::info("exit 3");
            return view('reset',$data);
        }
        else{
            \Log::info("No matching username = $userName");
            $data['user_name'] = '';
            $data['user_id'] = '';
            $data['userRoles'] = [];
            $data['username']=$userName;
            $data['errors'] = 'UserName not in system';
            \Log::info("exit 4");
            return view('login',$data);
        }

    }

    public function baseData()
    {
        $data['errors'] = [];
        $data['userRoles'] = [];
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

    public function referred($userId,Request $request)
    {
        $user = Users::find($userId);
        if($user){
            $request->session()->set('referralId', $user->id);
        }
        $pages = new PagesController;
        return $pages->test($request);

    }

    public function emailVerified($userId,$key,Request $request)
    {
        $memberId = $userId;
        \Log::info("memberId = $userId   key=$key");
        $user = Users::find($userId);
        if($user){
            if($user->user_link == $key){
                // email was verified
                $user->member = 2;
                $user->save();
                $data= $this->basedata();
                $data['username'] = '';
                $data['user_name'] = '';

                $data['user_id'] = '';
                $request->session()->set('user_id', $user->id);
                $request->session()->save();
                return view('email_verification_continue',$data);
            }
            else{
                //email link tweaked
                $data= $this->basedata();
                $data['username'] = '';
                $data['user_name'] = '';

                $data['user_id'] = '';
                return view('email_verification_bad',$data);
            }
        }
        else{
            //email link tweaked
            $data= $this->basedata();
            $data['username'] = '';

            $data['user_name'] = '';
            $data['user_id'] = '';
            return view('email_verification_bad',$data);
        }

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
    public function memberConfirmed($user, $request)
    {
        $data= $this->basedata();
        $username = $user->first_name.' '.$user->last_name;
        $request->session()->set('user_name', $username);
        $request->session()->set('user_id', $user->id);
        $request->session()->save();
        $data = $this->basedata();
        $data['user_name'] = $username;
        $data['user_id'] = $user->id;
        $data['username'] = $username;
         $data['email'] = $user->email;
        \Log::info("already a full member");
        return view('registration_complete',$data);
    }

    public function initialRegistration(Request $request)
    {
        $user = new Users;
        $user->email =$request->input('email');
        $user->user_name = $request->input('username');
        $user->password = $request->input('password');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $referralId = $request->session()->get('referralId');
        if($referralId <1){
            $refUser = Users::select('id')->where('member',5)->orderByRaw("RAND()")->first();
            $referralId = $refUser->id;
        }
        $request->session()->set('referralId','');
        $user->sponsor_id = $referralId;
        $user->member = 1;
        $user->save();
        $user->user_link =  md5($user->id);
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


    public function loadProductInTransaction($newTrans, $userId, $role, $productId)
    {
        $product = Products::find($productId);
        if ($role ==1){
            $cost = $product->member;
        }
        else{
            $cost = $product->non_member;
        }

        $pay_bonus = $product->pay_bonus;
        $detail = new SalesTransactionDetails;
        $detail->transaction_id = $newTrans->id;
        $detail->date = time();
        $detail->purchased_by = $userId;
        $detail->amount = $cost;
        $detail->product_id = $productId;
        $detail->pay_bonus = $pay_bonus;
        $detail->shipping = $product->shipping_handling;
        $detail->save();
        $this->updateTransaction($newTrans,$detail);
        return $newTrans;
    }

    public function updateTransaction($trans, $detail)
    {
        $trans->total_items += $detail->amount;
        $trans->total_shipping += $detail->shipping;
        $trans->total_order =  $trans->total_items + $trans->total_shipping;
        if ($detail->pay_bonus ==1){
            $trans->pay_bonus_on_amt += $detail->amount;
        }
        $trans->save();

    }

    public function NewTransaction($userId)
    {
        $sales_transaction = new SalesTransactions;
        $sales_transaction->purchased_by = $userId;
        $sales_transaction->date = time();
        $sales_transaction->total_items = 0;
        $sales_transaction->total_shipping = 0;
        $sales_transaction->total_order = 0;
        $sales_transaction->pay_bonus_on_amt = 0;
        $sales_transaction->save();
        return $sales_transaction;

    }

}
