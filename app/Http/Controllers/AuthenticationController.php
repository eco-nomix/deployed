<?php
namespace App\Http\Controllers;
use Mail;
use Crypt;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Products;
use App\Models\UserRoles;
use App\Models\SalesTransactions;
use App\Models\RegionStates;
use App\Models\SalesTransactionDetails;
use App\Models\CustomerCreditCards;
use App\Models\CommissionLevel;
use App\http\Controllers\Organization;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cookie;

class AuthenticationController extends Controller
{


    public function login(Request $request)
    {
        $userName = $request->input('user_name');
        $data['username']=$userName;
        $data['reset'] = '';
        $data['user_name']='';
        $data['userRoles'] = $this->getUserRoles('x');
        $data['referral_link'] = 'Not logged in';
        $data['errors'] = '';
        $data['title'] = '';
        $data['description'] = 'Login';
        return view('login',$data);
    }

    public function logout2(Request $request)
    {
        $this->clearSession($request);

        $data = $this->baseData($request);
        $data['user_name'] = '';
        $data['reset'] = '';
        $data['username'] = '';
        $data['userRoles'] = $this->getUserRoles('x');
        $data['referral_link'] = 'Not logged in';
        $data['user_id'] = '';
        $data['title'] = '';
        $data['description'] = 'Login';
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
            \Log::info("  userId=$user->id  member=$user->member");
            $username = $user->first_name.' '.$user->last_name;
            $request->session()->set('username', $username);
            $request->session()->set('user_id', $user->id);
            $request->session()->set('user_link',$user->user_link);

            if($user->member == 5) {
                return $this->finishMemberLogin($user, $request);
            }
            if($user->member ==1){
                return $this->verificationSent($user,$request);
            }
            $data = $this->basedata($request);
            $data['username'] = $user->first_name.' '.$user->last_name;
            $data['user_name'] = '';
            $data['user_id'] = '';
            $data['userId'] = $user->id;
            $data['title'] = '';
            \Log::info("exit 1");

            return view('welcome2',$data);
        }
    }

    public function notValidLogin($request)
    {
        \Log::info("notvalidlogin ");
        $userName = $request->input('username');
        $user = Users::where('user_name', $userName)
        ->first();
        if ($user){
            $data['reset'] = 'yes';
            $data['referral_link'] = 'Not Logged In';
            \Log::info("found username");
        }else{
            $data['reset'] = '';
            $data['referral_link'] = 'Not Logged In';
        }
        $data['user_name'] = '';
        $data['username'] = $userName;
        $data['userRoles'] = $this->getUserRoles('x');
        $data['user_id'] = '';
        $data['errors'] = 'Password or Username incorrect';

        $data['title'] = '';
        $data['description'] = 'Invalid';
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
        \Log::info("in finishMemberLogin");
        $username = $user->first_name.' '.$user->last_name;
        $roles = $this->getUserRoles($user->id);
        $request->session()->set('user_name', $username);
        $request->session()->set('user_id', $user->id);
        $request->session()->set('userRoles',$roles);
        $request->session()->save();

        $data = $this->basedata($request);
        $refLink = $data['referral_link'];
        \Log::info("referralLink=$refLink");
        $data['user_name'] = $username;
        $data['userRoles'] = $roles;
        $data['user_id'] = $user->id;
        $data['title'] = '';
        \Log::info("exit 1");
        return view('welcome2',$data);
    }

    public function getUserRoles($userId)
    {
        $roles = UserRoles::select('role_id')->where('user_id',$userId)
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
        $data['description'] = 'Registration';
        $data['username']='';
        $data['user_id'] = '';
        $data['referral_link']= 'Not Logged In';
        $data['userRoles'] = $this->getUserRoles('x');
        $data['errors']= [] ;
        $data['title'] = '';
        $userId = $request->session()->get('user_id');
        \Log::info("userId in register=$userId");
        if($userId){
            $user = Users::find($userId);
            if ($user) {
                if ($user->member == 2) {
                    $data = $this->basedata($request);
                    $data['username'] = '';
                    $data['user_name'] = '';

                    $data['user_id'] = $userId;
                    \Log::info("exit 1");
                    return view('register2', $data);
                }
                if ($user->member == 3) {
                    $data = $this->basedata($request);
                    $data['username'] = '';
                    $data['user_name'] = '';

                    $data['user_id'] = $userId;
                    \Log::info("exit 1");
                    return view('payment', $data);
                }
                if ($user->member == 4) {
                    $data = $this->basedata($request);
                    $data['username'] = $user->first_name.' '.$user->last_name;
                    $data['user_name'] = '';
                    $data['user_id'] = $userId;
                    $data['userRoles'] = $this->getUserRoles($user->id);
                    $data['userId'] = $user->id;
                    \Log::info("exit 1");
                    return view('awaiting_payment', $data);
                }
                if ($user->member == 5) {

                    $data = $this->basedata($request);
                    $data['username'] = '';
                    $data['user_name'] = '';
                    $data['userRoles'] = $this->getUserRoles($user->id);
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
                $data = $this->basedata($request);
                $data['username'] = '';
                $data['user_name'] = '';
                $data['title'] = '';
                $data['userRoles'] = $this->getUserRoles('x');
                $data['user_id'] = '';
                return view('register',$data);
            }
            //not registered -  verify email
            $user = $this->initialRegistration($request);
            $this->emailConfirmation($user);
            return $this->verifyEmail($user);
        }
        $data = $this->basedata($request);
        $data['username'] = '';
        $data['user_name'] = '';
        $data['userRoles'] = $this->getUserRoles('x');
        $data['user_id'] = '';
        $data['title'] = '';
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
            if ($user->member >1 && $user->member<5){
                $homePhone = $request->input('home_phone');
                $cellPhone = $request->input('cell_phone');
                $addr1 = $request->input('addr1');
                $addr2 = $request->input('addr2');
                $city = $request->input('city');
                $state = $request->input('state');
                $region = RegionStates::where('state',$state)->first();
                if(!$region)
                    $region = RegionStates::where('state_name','like',$state.'%')->first();
                if(!$region)
                    $regionId = 0;
                else
                    $regionId = $region->id;
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
                $user->region_id = $regionId;
                $user->save();
            }
            if($payMethod == 'Mail'){
                $data['username'] = $user->first_name.' '.$user->last_name;
                $data['user_name'] = $user->first_name.' '.$user->last_name;
                $data['user_id'] = $user->id;
                $data['userRoles'] = $this->getUserRoles($user->id);
                $data['userId'] = $user->id;
                $data['title'] = '';
                $data['description'] = 'Mail';
                \Log::info("exit 1");
                $user->member = 4;
                $user->save();
                return view('awaiting_payment',$data);
            }
            $data = $this->basedata($request);
            $data['username'] = '';
            $data['user_name'] = '';
            $data['userRoles'] = $this->getUserRoles('x');
            $data['user_id'] = '';
            $data['title'] = '';
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
            $data = $this->basedata( $request);
            $username = $user->first_name . ' ' . $user->last_name;
            $request->session()->set('user_name', $username);
            $request->session()->set('user_id', $user->id);
            $request->session()->save();
            $data = $this->basedata($request);
            $data['user_name'] = $username;
            $data['charge'] = $trans->total_order;
            $data['cardnumber'] = "xxx...".substr($cc->credit_card_number,-4);
            $data['user_id'] = $user->id;
            $data['username'] = $username;
            $data['email'] = $user->email;
            $data['title'] = '';
            return view('thankyou', $data);
        }
    }

    public function saveCardInfo($request,$user)
    {
        if(!$user){

        }
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
            $data['username'] = '';
            $data['userRoles'] = $this->getUserRoles('x');

            $data['referral_link'] = 'Not logged in';
            $data['title'] = '';
            $data['description'] = 'Reset';
            \Log::info("exit 3");
            return view('reset',$data);
        }
        else{
            \Log::info("No matching username = $userName");
            $data['user_name'] = '';
            $data['user_id'] = '';
            $data['userRoles'] = $this->getUserRoles('x');
            $data['username']=$userName;
            $data['referral_link'] = 'Not Logged In';
            $data['username'] = '';
            $data['errors'] = 'UserName not in system';
            $data['title'] = '';
            $data['description'] = 'Login';
            \Log::info("exit 4");
            return view('login',$data);
        }

    }

    public function baseData($request)
    {

        $data['imageUrl'] = '../images/EarthRise.jpg';
        $data['message'] = 'Eco-nomix System\'s purpose is to provide the highest
            quality products to its customers that will help them improve
            their lives physically, emotionally, spirtually and economically.';
        $data['title'] = '';
        $data['user_id'] =$request->session()->get('user_id');

        $user = Users::find($data['user_id'] );
        if($user){
            $referralLink = "http://eco-nomix.org/referred/$user->id";
        }else{
            $referralLink = "Not Logged in";
        }
        $data['referral_link'] = $referralLink;
        $data['description'] = 'Authentication';
        return $data;
    }

    public function clearSession(Request $request)
    {
        $request->session()->set('user_name', '');
        $request->session()->set('username', '');
        $request->session()->set('user_id','');
        $request->session()->set('referralId', '');
        $request->session()->set('userRoles','');
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
        $ecosponsor    = $request->cookie('ecosponsor');
        if ($ecosponsor == '') {
            Cookie::queue('ecosponsor', $userId, 2628000);
        }
        if($user){
            $request->session()->set('referralId', $user->id);
        }
        else{
            $request->session()->set('referralId', '');
        }
        $userName = $request->input('user_name');
        $data['username']=$userName;
        $data['reset'] = '';
        $data['user_name']='';
        $data['userRoles'] = $this->getUserRoles('x');
        $data['errors'] = '';
        $data['title'] = 'Opportunity';
        $data['description'] = 'Opportunity to Change Your Life';
        $data['imageUrl'] = '../images/HandsPlant.jpg';
        $data['message'] = 'An Opportunity to Change Your Life! ';
        $data['message2'] = 'What we choose to do today will start out small
            like a seedling, but over time can become great for all the world to
            see.';
        $data['member_story'] = $user->member_story;
        $data['user_pic'] = $user->picture;
        $data['image2'] = '../images/red_down_arrow.png';
        return view('action',$data);

     //   $pages = new PagesController;
     //   \Log::info("cookie set to $userId");
     //   return $pages->test($request);

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
                $data= $this->basedata($request);
                $data['username'] = '';
                $data['user_name'] = '';

                $data['user_id'] = '';
                $data['title'] = '';
                $request->session()->set('user_id', $user->id);
                $request->session()->save();
                return view('email_verification_continue',$data);
            }
            else{
                //email link tweaked
                $data= $this->basedata($request);
                $data['username'] = '';
                $data['user_name'] = '';
                $data['title'] = '';
                $data['user_id'] = '';
                return view('email_verification_bad',$data);
            }
        }
        else{
            //email link tweaked
            $data= $this->basedata($request);
            $data['username'] = '';
            $data['title'] = '';
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
        $data= $this->basedata($request);
        $username = $user->first_name.' '.$user->last_name;
        $request->session()->set('user_name', $username);
        $request->session()->set('user_id', $user->id);
        $request->session()->save();
        $data = $this->basedata($request);
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
        $ecosponsor = $request->cookie('ecosponsor');
        if($referralId == '') $referralId = $ecosponsor;
        if($referralId <1){
            $refUser = Users::select('id')->where('member',5)->orderByRaw("RAND()")->first();
            $referralId = $refUser->id;
        }
        $referrer = Users::find($referralId);
        $request->session()->set('referralId','');
        $user->sponsor_id = $referrer->id;
        $user->second_id = $referrer->sponsor_id;
        $user->third_id = $referrer->second_id;
        $user->fourth_id = $referrer->third_id;
        $user->fifth_id = $referrer->fourth_id;
        $user->member = 1;
        $user->save();
        $user->user_link =  md5($user->id);
        $user->save();
        $request->session()->set('user_id',$user->id);
        $request->session()->set('username',$user->first_name.' '.$user->last_name);
        return $user;
    }

    public function verifyEmail($user)
    {
        $data= $this->basedata($request);
        $data['username'] = '';
        $data['user_name'] = '';
        $data['user_id'] = '';
        $data['title'] = '';
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
    public function organization(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        \Log::info("memberId = $user_id");
        $user = Users::find($user_id);
        if($user){
            // real person
               $data = $this->memberData($user,$request);
               $levelList = $this->levelList($user,$request);

               $data['firstLevelSelect'] = $this->getLevel($levelList[1],1);
               $data['secondLevelSelect'] = $this->getLevel($levelList[2],2);
               $data['thirdLevelSelect'] = $this->getLevel($levelList[3],3);
               $data['fourthLevelSelect'] = $this->getLevel($levelList[4],4);
               $data['fifthLevelSelect'] = $this->getLevel($levelList[5],5);
               $data['total']['count'] = number_format($data['firstLevelSelect']['count']+$data['secondLevelSelect']['count']+
                   $data['thirdLevelSelect']['count']+$data['fourthLevelSelect']['count']+$data['fifthLevelSelect']['count'],0);
               $data['total']['sales'] = number_format($data['firstLevelSelect']['sales']+$data['secondLevelSelect']['sales']+
                   $data['thirdLevelSelect']['sales']+$data['fourthLevelSelect']['sales']+$data['fifthLevelSelect']['sales'],2);
               $data['total']['bonuses'] = number_format($data['firstLevelSelect']['bonuses']+$data['secondLevelSelect']['bonuses']+
                   $data['thirdLevelSelect']['bonuses']+$data['fourthLevelSelect']['bonuses']+$data['fifthLevelSelect']['bonuses'],2);
            $data['description'] = 'Login';
            return view('organization',$data);
        }
        else{

                return $this->logout($request);
        }
    }

    public function levelList($user,$request)
    {
        $levelList = [];
        if($request->input('Level1') == 0){
            $levelList[1]['user'] = $user;
            $levelList[1]['selected'] = 0;
            $levelList[1]['level'] = 1;
            $levelList[2]['user'] = $user;
            $levelList[2]['selected'] = 0;
            $levelList[2]['level'] = 2;
            $levelList[3]['user'] = $user;
            $levelList[3]['selected'] = 0;
            $levelList[3]['level'] = 3;
            $levelList[4]['user'] = $user;
            $levelList[4]['selected'] = 0;
            $levelList[4]['level'] = 4;
            $levelList[5]['user'] = $user;
            $levelList[5]['selected'] = 0;
            $levelList[5]['level'] = 5;
            $downuser = $user;
            $downuserbase = 1;
        }
        else{
            $downuserId = $request->input('Level1');
            $downuser = Users::find($downuserId);
            $levelList[1]['user'] = $downuser;
            $levelList[1]['selected'] = $downuserId;
            $levelList[1]['level'] = 0;
            $downuser = Users::find($downuserId);
            $downuserbase = 0;
            $levelList[2]['user'] = $downuser;
            $levelList[2]['selected'] = 0;
            $levelList[2]['level'] = 1;
            $levelList[3]['user'] = $downuser;
            $levelList[3]['selected'] = 0;
            $levelList[3]['level'] = 2;
            $levelList[4]['user'] = $downuser;
            $levelList[4]['selected'] = 0;
            $levelList[4]['level'] = 3;
            $levelList[5]['user'] = $downuser;
            $levelList[5]['selected'] = 0;
            $levelList[5]['level'] = 4;
        }
        if($request->input('Level2') > 0){
            $downuserId = $request->input('Level2');
            $downuser = Users::find($downuserId);
            $levelList[2]['user'] = $downuser;
            $levelList[2]['selected'] = $downuserId;
            $levelList[2]['level'] = 0;

            $levelList[3]['user'] = $downuser;
            $levelList[3]['selected'] = 0;
            $levelList[3]['level'] = 1;
            $levelList[4]['user'] = $downuser;
            $levelList[4]['selected'] = 0;
            $levelList[4]['level'] = 2;
            $levelList[5]['user'] = $downuser;
            $levelList[5]['selected'] = 0;
            $levelList[5]['level'] = 3;
        }
        if($request->input('Level3') >0){
            $downuserId = $request->input('Level3');
            $downuser = Users::find($downuserId);
            $levelList[3]['user'] = $downuser;
            $levelList[3]['selected'] = $downuserId;
            $levelList[3]['level'] = 0;


            $levelList[4]['user'] = $downuser;
            $levelList[4]['selected'] = 0;
            $levelList[4]['level'] = 1;
            $levelList[5]['user'] = $downuser;
            $levelList[5]['selected'] = 0;
            $levelList[5]['level'] = 2;
        }
        if($request->input('Level4') >0){
            $downuserId = $request->input('Level4');
            $downuser = Users::find($downuserId);
            $levelList[4]['user'] = $downuser;
            $levelList[4]['selected'] = $downuserId;
            $levelList[4]['level'] = 0;

            $levelList[5]['user'] = $downuser;
            $levelList[5]['selected'] = 0;
            $levelList[5]['level'] = 1;
        }
        if($request->input('Level5') >0){
            $downuserId = $request->input('Level5');
            $downuser = Users::find($downuserId);
            $levelList[5]['user'] = $downuser;
            $levelList[5]['selected'] = $downuserId;
            $levelList[5]['level'] = 0;
        }
        return $levelList;
    }


    public function memberData($user,Request $request)
    {
        \Log::info('memberData');
        $username = $user->first_name.' '.$user->last_name;
        $roles = $this->getUserRoles($user->id);
        $request->session()->set('user_name', $username);
        $request->session()->set('user_id', $user->id);
        $userId = $user->id;
        $user = Users::find($userId);
        if($user){
            $referralLink = "http://eco-nomix.org/referred/$user->id";
        }else{
            $referralLink = "Not Logged in";
        }

        $request->session()->set('userRoles',$roles);
        $request->session()->save();
        $data = [];
        $data['firstId'] = 0;
        $data['errors'] = [];
        $data['referral_link']= $referralLink;
        $data['userRoles'] = $roles;
        $data['user_name'] = $username;
        $data['user_id'] = $user->id;
        $data['username'] = $username;
        $data['email'] = $user->email;
        $data['title'] = '';
        return $data;
    }

    public function getLevel($levelList,$level)
    {
        \Log::info("getlevel for $level");
        $results = '';
        $users = $this->getGeneration($levelList['user'],$levelList['level']);
        $results['select'] = $this->prepareSelect($users, $level, $levelList['selected']);
        $results['count'] = count($users);
        $results['sales'] = $this->totalTransactions($users);
        $results['bonuses'] = $this->totalBonuses($users, $level);
        return $results;
    }

    public function totalTransactions($users)
    {
        \Log::info("in totalTransactions");
        $total = 0;
        foreach($users as $user){
            \Log::info("userId=$user->id");
            $sales = SalesTransactions::where('purchased_by',$user->id)
              //  ->where('date','>=',$begDate)->where('date',"<=",$endDate)
            ->get();
            foreach($sales as $sale){
                $total += $sale->total_items;
            }
            \Log::info("total=$total");
        }
        return number_format($total,2);
    }

    public function totalBonuses($users, $level)
    {
        \Log::info("in totalBonuses");
        $commission = CommissionLevel::where('sales_level',$level)->first();
        $total = 0;
        foreach($users as $user){
            \Log::info("userId=$user->id");
            $sales = SalesTransactions::where('purchased_by',$user->id)
                //  ->where('date','>=',$begDate)->where('date',"<=",$endDate)
                ->get();
            foreach($sales as $sale){
                $total += $sale->pay_bonus_on_amt * $commission->percentage * .01;
            }
            \Log::info("total=$total");
        }
        return number_format($total,2);
    }

    public function getGeneration($user,$level)
    {
        \Log::info("id= $user->id  level=$level");
        $field = $this->levelToField($level);
        $users = Users::where($field,$user->id)->get();
        return $users;
    }

    public function levelToField($level)
    {
        \Log::info("level=$level");
        if ($level == 1)
            $field = 'sponsor_id';
        elseif($level == 2)
            $field = 'second_id';
        elseif($level == 3)
            $field = 'third_id';
        elseif($level == 4)
            $field = 'fourth_id';
        elseif($level == 5)
            $field = 'fifth_id';
        elseif($level == 0)
            $field = 'id';
        return $field;
    }

    public function prepareSelect($users, $level, $selected)
    {
        $results = "<select name='Level".$level."' style='width:300px;' onchange='this.form.submit()' > ";
        $selectField = ($selected == 0)?'selected':'';
        $results .= "<option value = '0' $selectField>All Users</option>";
        foreach($users as $user){
            $selectField = ($user->id == $selected)?'selected':'';
            $results .= "<option value ='".$user->id."' $selectField>".$user->first_name.' '.$user->last_name.'</option>';
        }
        $results .="</select>";
        return $results;
    }

    public function accounting(Request $request)
    {
        $data= $this->basedata($request);
        $data['user_name'] = $request->session()->get('user_name');
        $data['userRoles'] = $request->session()->get('userRoles');
        $data['user_id'] = $request->session()->get('user_id');
        $data['title'] = '';
        return view('myaccounting',$data);
    }



}
