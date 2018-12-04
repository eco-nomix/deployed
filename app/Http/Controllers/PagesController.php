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
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{


    public function downImg(Request $request, $selected)
    {
        $download_path = public_path()."/images/$selected";
        return response()->download($download_path);
    }

    //
    public function userData($request)
    {


        $kineticsponsor    = $request->cookie('kineticsponsor');
        $data['kineticsponsor'] = $kineticsponsor;
        \Log::info("kineticsponsor2 = $kineticsponsor");
        $data['user_name'] =$request->session()->get('user_name');
        $data['username'] =$request->session()->get('username');
        $username = $request->session()->get('user_name');
        $roles = $request->session()->get('userRoles');
        \Log::info("username2 = $username");
        $data['user_id'] =$request->session()->get('user_id');
        $userId = $request->session()->get('user_id');
        $user = Users::find($userId);
        $name = $request->root();
        \Log::info("root = $name   userid=$userId");
        if ($user) {
            $referralLink = "http://cbdusergroups.com/referred/$user->id";
        } else {
            $referralLink = "Not Logged in";
        }
        $data['referral_link']= $referralLink;
        $data['errors'] = [];
        $data['userRoles'] = $roles;
        $data['KineticGold_url'] = 'test';
        $data['homePage'] = 'homePage';
        $data['title'] = '';
        $data['description'] = '';
        return $data;
    }

    public function home(Request $request)
    {
        $data = $this->userData($request);
        $name = $request->root();
        \Log::info("root = $name");
        if (stristr($name, "golddiggerz")) {
            $data = $this->userData($request);
            $data['title'] = 'GoldDiggers';
            $data['description'] = 'Introduction';
            return view('golddiggers.info', $data);
        }
        if (stristr($name, "tibfoundation")) {
            $data = $this->userData($request);
            $data['title'] = 'TIBFoundation';
            $data['description'] = 'Introduction';
            return view('TIB.tib', $data);
        }
        if (stristr($name, "cbdcaregroup")) {
            $data = $this->userData($request);
            $data['title'] = 'CBD Care Group';
            $data['description'] = 'Introduction';
            return view('CBD.cbd', $data);
        }
        if (stristr($name, "tchamgang")) {
            $data = $this->userData($request);
            $data['title'] = 'tchamgang';
            $data['description'] = 'tchamgang';
            return view('tchamgang.tchamgang', $data);
        }

        $data['title'] = 'KineticGold';
        $data['imageUrl'] = '../images/denmark.jpg';
        $data['description'] = 'cryptocurrency banking system';
        return view('kineticgold.welcome', $data);
    }
    public function test(Request $request)
    {

        $data = $this->userData($request);
        $random = rand(1, 4);
        if ($random == 1) {
            $data['imageUrl'] = '../images/EarthRise.jpg';
            $data['message'] = 'kinetic-nomix\'s purpose is to provide the highest
            quality products to its customers that will help them improve
            their lives physically, emotionally, spirtually and economically.';
        } elseif ($random == 2) {
            $data['imageUrl'] = '../images/MustardTree.jpg';
            $data['message'] = 'What we choose to do today will start out small
            like a seedling, but over time can become great for all the world to
            see.';
        } elseif ($random == 3) {
            $data['imageUrl'] = '../images/HandsPlant.jpg';
            $data['message'] = 'Our future is something to be planned for, prepared
            for and even nutured.  ';
        } else {
            $data['imageUrl'] = '../images/Grass.jpg';
            $data['message'] = 'The decisions we make daily in what products
            that we choose to purchase will impact not only our own lives, but
            the lives of all the people on this planet.';
        }
        $data['title'] = 'KineticGold';
        $data['description'] = 'Improving lives physically, emotionally, spiritually, economically';

        return view('eco.welcome2', $data);
    }

//    KineticGold
    public function about(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold';
        $data['description'] = 'Improving lives physically, emotionally, spiritually, economically';

        return view('kineticgold.about', $data);
    }
    public function autoship(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Autoship';
        $data['description'] = 'Autoship Policy';

        return view('kineticgold.autoship', $data);
    }
    public function bankinterface(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Kinetic Golds Interface';
        $data['description'] = 'KineticGold unique Interface between Cryptocurrency and the Off-Shore Bank';

        return view('kineticgold.bankinterface', $data);
    }
    public function benefits(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Member Benefits';
        $data['description'] = 'KineticGold Member Benefits';

        return view('kineticgold.benefits', $data);
    }
    public function businesscards(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Business Cards';
        $data['description'] = 'KineticGold Business Cards';

        return view('kineticgold.businesscards', $data);
    }
    public function contact(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Contact';
        $data['description'] = 'KineticGold Contact';

        return view('kineticgold.contact', $data);
    }
    public function cryptocurrency(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Cryptocurrency';
        $data['description'] = 'Details of KineticGold Cryptocurrency';

        return view('kinetic.cryptocurrency', $data);
    }
    public function debitcards(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Payroll Cards';
        $data['description'] = 'KineticGold Payroll Cards';

        return view('kineticgold.debitcards', $data);
    }

    public function ewallet(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Ewallet';
        $data['description'] = 'Details of KineticGold Ewallet';

        return view('kineticgold.ewallet', $data);
    }
    public function comparison(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Multi-Level Comparison';
        $data['description'] = 'KineticGold Multi-Level Comparison';

        return view('kineticgold.comparison', $data);
    }
    public function introduction(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Introduction to Marketing Plan';
        $data['description'] = 'Introduction to Marketing Plan';

        return view('kineticgold.introduction', $data);
    }
    public function limitations(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Limitations on Marketing';
        $data['description'] = 'KineticGold Limitations on Marketing';

        return view('kineticgold.limitations', $data);
    }

    public function memberagreement(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Member Agreement';
        $data['description'] = 'KineticGold Member Agreement';

        return view('kineticgold.mem_agreement', $data);
    }
    public function membercost(Request $request)
    {
        $data = $this->userData($request);

        $data['title'] = 'KineticGold Member Cost';
        $data['description'] = 'KineticGold Member Cost';

        return view('kineticgold.membercost', $data);
    }
    public function memberterms(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Member Agreement Terms and Conditions';
        $data['description'] = 'KineticGold Member Agreement Terms and Conditions';

        return view('kineticgold.memberterms', $data);
    }

    public function offshorebank(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Kinetic Golds Offshore bank';
        $data['description'] = 'KineticGold Offshore Bank';

        return view('kineticgold.offshorebank', $data);
    }
    public function plans(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Business Plan';
        $data['description'] = 'KineticGold Business Plan';

        return view('kineticgold.plans', $data);
    }
    public function potential(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Potential Income';
        $data['description'] = 'KineticGold Potential Income';

        return view('kineticgold.potential', $data);
    }

    public function policies(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Policies and Procedures';
        $data['description'] = 'Policies and Procedures';
        return view('kineticgold.policies', $data);
    }

    public function present(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Presentation';
        $data['description'] = 'Presentation';

        return view('kineticgold.presentation', $data);
    }
    public function privacy(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Privacy Policy';
        $data['description'] = 'Privacy Policy';
        return view('kineticgold.privacy', $data);
    }
    public function products(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Products';
        $data['description'] = 'KineticGold Products';

        return view('kineticgold.products', $data);
    }
    public function profitsharing(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Kinetic Golds Profit Sharing Program';
        $data['description'] = 'KineticGold Profit Sharing Program';

        return view('kineticgold.profitsharing', $data);
    }
    public function purpose(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Purpose';
        $data['description'] = 'Spiritual, Economic, Physical, Emotional';

        return view('kineticgold.purpose', $data);
    }

    public function referrallinks(Request $request)
    {
        $userId = $request->session()->get('user_id');
        $user = Users::find($userId);
        if ($user) {
            $referralLink = "kineticgold.org/referred/$user->id";
        } else {
            $referralLink = "Need to login to see your referral link";
        }
        $data = $this->userData($request);
        $data['ReferralLink'] = $referralLink;
        $data['title'] = 'KineticGold Referral Links';
        $data['description'] = 'KineticGold Referral Links';

        return view('kineticgold.referrallinks', $data);
    }
    public function returns(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Return Policy';
        $data['description'] = 'KineticGold Return Policy';

        return view('kineticgold.returns', $data);
    }
    public function requirements(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Requirements for Bonuses';
        $data['description'] = 'KineticGold Requirements for Bonuses';

        return view('kineticgold.requirements', $data);
    }

    public function rewards(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Kinetic Golds Rewards Program';
        $data['description'] = 'KineticGold Rewards Program';

        return view('kineticgold.rrewards', $data);
    }
    public function selection(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Product Selection';
        $data['description'] = 'KineticGold Product Selection';

        return view('kineticgold.selection', $data);
    }






//    GoldDiggers
    public function about2(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Gold Diggers ';
        $data['description'] = '';

        return view('golddiggers.about2', $data);
    }
    public function autoship2(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Gold Diggers Autoship';
        $data['description'] = 'Autoship Policy';

        return view('golddiggers.autoship2', $data);
    }
    public function benefits2(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Gold Digger Member Benefits';
        $data['description'] = 'Gold Digger Member Benefits';

        return view('golddigger.benefits2', $data);
    }
    public function contact2(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Gold Diggers Contact';
        $data['description'] = 'Gold Diggers Contact';

        return view('golddiggers.contact2', $data);
    }

    public function info(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'GoldDiggers';
        $data['description'] = 'Introduction';

        return view('golddiggers.info', $data);
    }
    public function introduction2(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Introduction to Kinetic Gold';
        $data['description'] = 'Introduction to Kinetic Gold';

        return view('golddiggers.introduction2', $data);
    }
    public function memberagreement2(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Gold Diggers Member Agreement';
        $data['description'] = 'Gold DiggersMember Agreement';

        return view('golddiggers.mem_agreement2', $data);
    }
    public function membercost2(Request $request)
    {
        $data = $this->userData($request);

        $data['title'] = 'Gold Diggers Member Cost';
        $data['description'] = 'KineticGold Member Cost';

        return view('golddiggers.membercost2', $data);
    }
    public function memberterms2(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Gold Diggers Association Terms and Conditions';
        $data['description'] = 'Gold Diggers Association Member Agreement Terms and Conditions';

        return view('golddiggers.memberterms2', $data);
    }
    public function plans2(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Details';
        $data['description'] = 'Gold Diggers Association Details';

        return view('golddiggers.plans2', $data);
    }
    public function policies2(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Gold Digger Policies and Procedures';
        $data['description'] = 'Policies and Procedures';
        return view('golddiggers.policies2', $data);
    }
    public function purpose2(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] ='Gold Diggers Purpose';
        $data['description'] = 'Spiritual, Economic, Physical, Emotional';

        return view('golddiggers.purpose2', $data);
    }
    public function privacy2(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Gold Diggers Privacy Policy';
        $data['description'] = 'Privacy Policy';
        return view('golddiggers.privacy2', $data);
    }
    public function requirements2(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Gold Diggers Association Requirements';
        $data['description'] = 'Gold Diggers Association Requirements';

        return view('golddiggers.requirements2', $data);
    }

    public function returns2(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Gold Diggers Return Policy';
        $data['description'] = 'Gold Diggers Return Policy';

        return view('golddiggers.returns2', $data);
    }




//    TIB
    public function about3(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'TIB Foundation ';
        $data['description'] = '';

        return view('TIB.about3', $data);
    }
    public function autoship3(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'TIB Foundation Autoship';
        $data['description'] = 'Autoship Policy';

        return view('TIB.autoship3', $data);
    }

    public function benefits3(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'TIB Foundation Member Benefits';
        $data['description'] = 'TIB Foundation Member Benefits';

        return view('TIB.benefits3', $data);
    }
    public function memberagreement3(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'TIB Foundation Member Agreement';
        $data['description'] = 'TIB Foundation Member Agreement';

        return view('TIB.mem_agreement3', $data);
    }
    public function membercost3(Request $request)
    {
        $data = $this->userData($request);

        $data['title'] = 'TIB Foundation Member Cost';
        $data['description'] = 'TIB Foundation Member Cost';

        return view('TIB.membercost3', $data);
    }
    public function memberterms3(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'TIB Foundation Terms and Conditions';
        $data['description'] = 'TIB Foundation Member Agreement Terms and Conditions';

        return view('TIB.memberterms3', $data);
    }
    public function plans3(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Details';
        $data['description'] = 'TIB Foundation Details';

        return view('TIB.plans3', $data);
    }

    public function returns3(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'TIB Foundation Returns';
        $data['description'] = 'Returns';

        return view('TIB.returns3', $data);
    }
    public function policies3(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'TIB Foundation Policies and Procedures';
        $data['description'] = 'Policies and Procedures';
        return view('TIB.policies3', $data);
    }

    public function purpose3(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] ='TIB Foundations Purpose';
        $data['description'] = 'Beat the Banks at their own game';

        return view('TIB.purpose3', $data);
    }
    public function privacy3(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'TIB Privacy Policy';
        $data['description'] = 'Privacy Policy';
        return view('TIB.privacy3', $data);
    }


    public function tib(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'TIB Foundation';
        $data['description'] = 'Introduction';

        return view('TIB.tib', $data);
    }





//    CBD
    public function accounting4(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'CBD Share Group Accounting';
        $data['description'] = 'CBD Share Group Accounting';

        return view('CBD.accounting', $data);
    }
    public function active(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'CBD Share Group Active Members';
        $data['description'] = 'CBD Share Group Active Members';

        return view('CBD.active', $data);
    }
    public function benefits4(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'CBD Share Group Benefits';
        $data['description'] = 'CBD Share Group Benefits';

        return view('CBD.benefits4', $data);
    }
    public function limitations4(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'CBD Care Group Limitations on Marketing';
        $data['description'] = 'CBD Care Group Limitations on Marketing';

        return view('CBD.limitations', $data);
    }
    public function memberagreement4(Request $request)
    {
        $data = $this->userData($request);

        $data['title'] = 'CBD Care Group Member Agreement';
        $data['description'] = 'CBD Care Group Member Agreement';

        return view('CBD.mem_agreement4', $data);
    }
    public function membercost4(Request $request)
    {
        $data = $this->userData($request);

        $data['title'] = 'CBD Care Group Member Cost';
        $data['description'] = 'CBD Care Group Member Cost';

        return view('CBD.membercosts', $data);
    }
    public function memberterms4(Request $request)
    {
        $data = $this->userData($request);

        $data['title'] = 'CBD Care Group Member Terms and Conditions';
        $data['description'] = 'CBD Care Group Member Terms and Conditions';

        return view('CBD.memberterms4', $data);
    }
    public function profitsharing4(Request $request)
    {
        $data = $this->userData($request);

        $data['title'] = 'CBD Care Group Profit Sharing';
        $data['description'] = 'CBD Care Group Profit Sharing';

        return view('CBD.profitsharing', $data);
    }
    public function referrallinks4(Request $request)
    {
        $data = $this->userData($request);

        $data['title'] = 'CBD Care Group Referral Links';
        $data['description'] = 'CBD Care Group Referral Links';

        return view('CBD.referrallinks', $data);
    }
    public function requirements4(Request $request)
    {
        $data = $this->userData($request);

        $data['title'] = 'CBD Care Group Requirements';
        $data['description'] = 'CBD Care Group Requirements';

        return view('CBD.requirements', $data);
    }




//    Economics
    public function books(Request $request)
    {
        $data = $this->userData($request);
        $subGroup = $request->input('ProductGroupList')?:23;
        $data['Categories'] = $this->productCategories(7, $subGroup);
        $data['productSummary'] = $this->productSummary($subGroup);
        $data['title'] = 'KineticGold Books';
        $data['description'] = 'KineticGold Books';

        return view('eco.books', $data);
    }
    public function camping(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Camping Products';
        $data['description'] = 'KineticGold Camping Products';

        return view('eco.camping', $data);
    }
    public function charities(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Charitable Donations';
        $data['description'] = 'KineticGold Charitable Donations';

        return view('eco.charities', $data);
    }
    public function cooking(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Cooking Products';
        $data['description'] = 'KineticGold Cooking Products';

        return view('eco.cooking', $data);
    }
    public function discount(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Member Discount';
        $data['description'] = 'KineticGold Member Discount';

        return view('eco.discount', $data);
    }
    public function donations(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Charitable Donations';
        $data['description'] = 'KineticGold Charitable Donations';

        return view('eco.donations', $data);
    }
    public function economically(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold economical benefit';
        $data['description'] = 'KineticGold Business Cards';

        return view('eco.economically', $data);
    }
    public function emotionally(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Emotional Benefits';
        $data['description'] = 'KineticGold Emotional Benefits';

        return view('eco.emotionally', $data);
    }
    public function energy(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Energy Products';
        $data['description'] = 'KineticGold Energy Products';

        return view('eco.energy', $data);
    }
    public function experiences(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Member Experiences';
        $data['description'] = 'KineticGold Member Experiences';

        return view('eco.experiences', $data);
    }
    public function food(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Food Products';
        $data['description'] = 'KineticGold Food Products';

        return view('eco.food', $data);
    }
    public function founders(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Founders';
        $data['description'] = 'KineticGold Founders';

        return view('eco.founders', $data);
    }
    public function groups(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Sponsored Groups';
        $data['description'] = 'KineticGold Sponsored Groups';

        return view('eco.groups', $data);
    }
    public function health(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Health Products';
        $data['description'] = 'KineticGold Health Products';

        return view('eco.health', $data);
    }
    public function homepage(Request $request)
    {
        $data = $this->userData($request);
        $userId = $request->session()->get('user_id');
        $editUser = Users::find($userId);
        $data['title'] = 'KineticGold Member Personal Information';
        $data['description'] = 'KineticGold Personal Information';
        $data = $this->userData($request);
        if ($editUser) {
            $data['user_id'] = $userId;
            $data['username'] = $editUser->user_name;
            $data['password'] = $editUser->password;
            $data['first_name'] = $editUser->first_name;
            $data['last_name'] = $editUser->last_name;
            $data['email'] = $editUser->email;
            $data['home_phone'] = $editUser->home_phone;
            $data['cell_phone'] = $editUser->cell_phone;
            $data['addr1'] = $editUser->addr1;
            $data['addr2'] = $editUser->addr2;
            $data['city'] = $editUser->city;
            $data['state'] = $editUser->state;
            $data['postal_code'] = $editUser->postal_code;
            $data['country'] = $editUser->country;
            $data['member_story'] = $editUser->member_story;
            $data['social_security'] = $editUser->social_security;
            $data['picture'] = $editUser->picture;
            $status = RegistrationStatus::where('member_status', $editUser->member)->first();
            $data['MemberStatus'] = $status->description;
            return view('eco.homepage', $data);
        } else {
            $data['selectNames'] = '';
            $data['title'] = 'Admin';
            $data['description'] = 'Admin';
            return view('eco.management', $data);
        }
    }
    public function house(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Household Products';
        $data['description'] = 'KineticGold Household Products';

        return view('eco.house', $data);
    }
    public function introduction9(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Introduction to Kinetic Gold';
        $data['description'] = 'Introduction to Kinetic Gold';

        return view('eco.introduction9', $data);
    }
    public function linksfood(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Video Food Production';
        $data['description'] = 'KineticGold Video Food Production';

        return view('eco.linksfood', $data);
    }
    public function linksgardening(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Video Gardening';
        $data['description'] = 'Video Gardening';

        return view('eco.linksgardening', $data);
    }
    public function linksgreenhouses(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Video Greenhouses';
        $data['description'] = 'Video Greenhouses';

        return view('eco.linksgreenhouses', $data);
    }

    public function linkspoultry(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Video Poultry Raising';
        $data['description'] = 'Video Poultry Raising';

        return view('eco.linkspoultry', $data);
    }
    public function linkslivestock(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Raising Livestock';
        $data['description'] = 'Raising Livestock';

        return view('eco.linkslivestock', $data);
    }
    public function linksprotection(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Video Home Protection';
        $data['description'] = 'Video Home Protection';

        return view('eco.linksprotection', $data);
    }
    public function linksorchards(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Video Orchard Management';
        $data['description'] = 'Video Orchard Management';

        return view('eco.linksorchards', $data);
    }
    public function linksaquaponics(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Video Aquaponics Systems';
        $data['description'] = 'Video Aquaponics Systems';

        return view('eco.linksaquaponics', $data);
    }

    public function linksbeekeeping(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Video Beekeeping';
        $data['description'] = 'Video Beekeeping';

        return view('eco.linksbeekeeping', $data);
    }
    public function linksbiogas(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Video Bio-Gas Digestors';
        $data['description'] = 'Video Bio-Gas Digestors';

        return view('eco.linksbiogas', $data);
    }
    public function linkswater(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Video Water Purification';
        $data['description'] = 'KineticGold Video Water Purification';

        return view('eco.linkswater', $data);
    }
    public function linksenergy(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Video Energy Production';
        $data['description'] = 'Solar, Water, Bio-gas Videos';

        return view('eco.linksenergy', $data);
    }
    public function linksrecycling(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Video Recycling';
        $data['description'] = 'KineticGold Video Recycling';

        return view('eco.linksrecycling', $data);
    }
    public function linkscamping(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Video Camping and Survival';
        $data['description'] = 'Video Camping and Survival';

        return view('eco.linkscamping', $data);
    }
    public function linkscooking(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Video Cooking Systems';
        $data['description'] = 'Cooking Systems';

        return view('eco.linkscooking', $data);
    }
    public function linkshealth(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Video Healthy Lifestyles';
        $data['description'] = 'Video Health Lifestyles';

        return view('eco.linkshealth', $data);
    }
    public function linkshouse(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Video Household Products';
        $data['description'] = 'Video Household Products';

        return view('eco.linkshouse', $data);
    }

    public function logout(Request $request)
    {
        $data = $this->userData($request);
        return view('eco.logout', $data);
    }
    public function members(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Members';
        $data['description'] = 'KineticGold Members';

        return view('eco.members', $data);
    }
    public function money(Request $request)
    {
        $data = $this->userData($request);
        return view('eco.money', $data);
    }

    public function people(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold People Involved';
        $data['description'] = 'KineticGold People Involved';

        return view('eco.people', $data);
    }
    public function physically(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Physical Benefits';
        $data['description'] = 'KineticGold Physical Benefits';

        return view('eco.physically', $data);
    }
    public function productsSum(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Products';
        $data['description'] = 'KineticGold Products';

        return view('eco.productsSum', $data);
    }
    public function recycling(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Recycling Products';
        $data['description'] = 'KineticGold Recycling Products';

        return view('eco.recycling', $data);
    }
    public function referral(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Referral Bonuses';
        $data['description'] = 'KineticGold Referral Bonuses';

        return view('eco.referral', $data);
    }
    public function selfreliance(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Self Reliance';
        $data['description'] = 'KineticGold Self Reliance';

        return view('eco.self_reliance', $data);
    }
    public function spiritually(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Spiritual Benefits';
        $data['description'] = 'KineticGold Spiritual Benefits';

        return view('eco.spiritually', $data);
    }
    public function startup(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Startup Package';
        $data['description'] = 'KineticGold Startup Package';

        return view('eco.startup', $data);
    }
    public function stores($productGroup, Request $request)
    {
        $data = $this->userData($request);
        $data['stores'] = $this->storeList($productGroup);
        $data['product_group'] = $productGroup;
        if ($productGroup == 38) {
            $data['title'] = 'Boutiques';
            $data['store_type'] = 'Boutique';
            $data['description'] = 'Member Boutiques';
        } elseif ($productGroup == 39) {
            $data['title'] = 'Art Galleries';
            $data['store_type'] = 'Art Gallery';
            $data['description'] = 'Member Art Galleries';
        } elseif ($productGroup == 40) {
            $data['title'] = 'Estate Sales';
            $data['store_type'] = 'Estate Sale';
            $data['description'] = 'Estate Sales';
        } elseif ($productGroup == 41) {
            $data['title'] = 'Services';
            $data['store_type'] = 'Services';
            $data['description'] = 'Member Services';
        } elseif ($productGroup == 42) {
            $data['title'] = 'Stores';
            $data['store_type'] = 'Stores';
            $data['description'] = 'Member Stores';
        }
        return view('eco.stores', $data);
    }
    public function training(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Training Products';
        $data['description'] = 'KineticGold Training Products';

        return view('eco.training', $data);
    }
    public function traininglinks(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Video Training Links';
        $data['description'] = 'Video Training Links';

        return view('eco.traininglinks', $data);
    }
    public function transfers(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Immediate Transfer of Funds';
        $data['description'] = 'KineticGold Immediate Transfer of Funds';

        return view('eco.transfers', $data);
    }
    public function water(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Water Purification Products';
        $data['description'] = 'KineticGold Water Purification Products';

        return view('eco.water', $data);
    }

    // non module

    public function accounting(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'KineticGold Accounting';
        $data['description'] = 'Accounting';

        return view('accounting', $data);
    }


    //non view

   public function addBlanks($results, $modd)
    {
        if ($modd >0) {
            for ($modd; $modd<6; $modd++) {
               // if($modd % 2){
               //     $cl = "class = 'eighth'";
              //  }else{
                    $cl = '';
               // }

                $results .= "<td $cl>";
            }
        }
        return $results;
    }


    public function editHomepage(Request $request)
    {

        $userId = $request->session()->get('user_id');
        $editUser = Users::find($userId);
        $editUser->password = $request->input('password');
        $editUser->first_name = $request->input('first_name');
        $editUser->last_name = $request->input('last_name');
        $editUser->email= $request->input('email');
        $editUser->home_phone = $request->input('home_phone');
        $editUser->cell_phone = $request->input('cell_phone');
        $editUser->addr1 = $request->input('addr1');
        $editUser->addr2 = $request->input('addr2');
        $editUser->city = $request->input('city');
        $editUser->state = $request->input('state');
        $editUser->postal_code = $request->input('postal_code');
        $editUser->country = $request->input('country');
        $editUser->member_story = $request->input('member_story');
        $editUser->social_security = $request->input('social_security');
        $picture = $this->addImage($userId, $request);
        if ($picture > '') {
            $editUser->picture = $picture;
        }
        $editUser->save();

        return $this->homepage($request);
    }


    public function itemCount(Request $request)
    {
        $userId = $request->session()->get('user_id');
        $shoppingCart = new ShoppingCarts;
        return $shoppingCart->getItemCount($userId);
    }
    public function product($productId, Request $request)
    {
        $data = $this->userData($request);
        $product = Products::find($productId);
        $data['ItemCount'] = $this->itemCount($request);
        $data['Product'] = $product;
        $data['title'] = $product->product_name.' - '.$product->Author;
        $data['description'] = $product->description;

        return view($product->display_page, $data);
    }
    public function prepareSelect($productGroups, $selected)
    {
        $results = "<select name='ProductGroupList' style='width:300px;' onchange='this.form.submit()' > ";
        $selectField = ($selected == 0)?'selected':'';
        //  $results .= "<option value = '0' $selectField>All Users</option>";

        foreach ($productGroups as $id => $productGroup) {
            $selectField = ($id == $selected)?'selected':'';
            $results .= "<option value ='".$id."' $selectField>$productGroup</option>";
        }
        $results .="</select>";
        return $results;
    }

    public function productCategories($productGroup, $selected)
    {
        $productGroups= ProductGroups::where('Parent_id', $productGroup)->orderBy('group_order')->pluck('name', 'id');
        $select = $this->prepareSelect($productGroups, $selected);
        return $select;
    }
    public function productSummary($subGroup)
    {
        $results = '';

        $products = Products::where('product_group', $subGroup)->orderBy('group_order')->get();
        $results = '<tr>';
        $ctr= 0;
        $modd=0;
        if (count($products)==0) {
            $results .= "<td>No books in this category, Coming Soon</td>";
            $ctr = 8;
        }

        foreach ($products as $product) {
            $results .= "<td class='eighth'><a href=\"product/$product->id\"><img src=\"images\\$product->image\" width=\"135px;\"></a></td>";
            $results .= "<td ><a href=\"product/$product->id\">";
            $description = "<b>".$product->product_name."</b><br>".$product->description."<br><b>".$product->Author."</b><br>".$product->display_description;
            $results .= substr($description, 0, 260)."...</a></td>";
            $ctr++;
            $ctr++;
            $modd = $ctr % 6;
            \Log::info("ctr=$ctr  mod=$modd");
            if ($modd == 0) {
                $results .= "</tr><tr>";
            }
        }
        $results = $this->addBlanks($results, $modd);
        $results .= "</tr>";
        return $results;
    }

    public function storeList($productGroup)
    {

        return UserStores::where('product_group', $productGroup)->orderBy('name')->get();
    }
    public function addImage($userId, Request $request)
    {

        $file = $request->file('file');
        if (!is_object($file)) {
            return 0;
        }
        $fileIsValid = $request->file('file')->isValid();
        if (!$fileIsValid) {
            return 0;
        }
        $mimeType = $file->getMimeType();
        if ($mimeType != 'image/jpeg' and $mimeType != 'image/png') {
            return 0;
        }
        //  dd($mimeType);
        $extension = ($mimeType == 'image/jpeg')?'.jpeg':'.png';

        $destination = 'images';
        $name = 'user'.$userId.$extension;
        $file->move($destination, $name);

        return $name;
    }
}
