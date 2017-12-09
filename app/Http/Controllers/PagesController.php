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

class PagesController extends Controller
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

    public function home(Request $request)
    {
        $data = $this->userData($request);

        $random = rand(0,3);
        if($random == 0) {
            $data['imageUrl'] = '../images/EarthRise.jpg';
            $data['message'] = 'Eco-nomix\'s purpose is to provide the highest
            quality products to its customers that will help them improve
            their lives physically, emotionally, spirtually and economically.';
        }elseif ($random == 1){
            $data['imageUrl'] = '../images/MustardTree.jpg';
            $data['message'] = 'What we choose to do today will start out small
            like a seedling, but over time can become great for all the world to
            see.';
        }elseif($random == 2){
            $data['imageUrl'] = '../images/HandsPlant.jpg';
            $data['message'] = 'Our future is something to be planned for, prepared
            for and even nutured.  ';
        }else{
            $data['imageUrl'] = '../images/Grass.jpg';
            $data['message'] = 'The decisions we make daily in what products
            that we choose to purchase will impact not only our own lives, but
            the lives of all the people on this planet.';
        }
        $data['title'] = 'Economix';
        $data['description'] = 'Improving lives physically, emotionally, spiritually, economically';
        return view('welcome',$data);
    }
    public function test(Request $request)
    {

        $data = $this->userData($request);
        $random = rand(1,4);
        if($random == 1) {
            $data['imageUrl'] = '../images/EarthRise.jpg';
            $data['message'] = 'Eco-nomix\'s purpose is to provide the highest
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
        $data['title'] = 'Economix';
        $data['description'] = 'Improving lives physically, emotionally, spiritually, economically';

        return view('welcome2',$data);
    }
    public function about(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix';
        $data['description'] = 'Improving lives physically, emotionally, spiritually, economically';

        return view('about',$data);
    }
    public function accounting(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Accounting';
        $data['description'] = 'Accounting';

        return view('accounting',$data);
    }

    public function autoship(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Autoship';
        $data['description'] = 'Autoship Policy';

        return view('autoship',$data);
    }

    public function benefits(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Member Benefits';
        $data['description'] = 'Economix Member Benefits';

        return view('benefits',$data);
    }
    public function businesscards(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Business Cards';
        $data['description'] = 'Economix Business Cards';

        return view('businesscards',$data);
    }

    public function startup(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Startup Package';
        $data['description'] = 'Economix Startup Package';

        return view('startup',$data);
    }

    public function referrallinks(Request $request)
    {
        $userId = $request->session()->get('user_id');
        $user = Users::find($userId);
        if($user){
            $referralLink = "eco-nomix.org/referred/$user->id";
        }else{
            $referralLink = "Need to login to see your referral link";
        }
        $data = $this->userData($request);
        $data['ReferralLink'] = $referralLink;
        $data['title'] = 'Economix Referral Links';
        $data['description'] = 'Economix Referral Links';

        return view('referrallinks',$data);
    }

    public function selfreliance(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Self Reliance';
        $data['description'] = 'Economix Self Reliance';

        return view('self_reliance',$data);
    }
    public function addBlanks($results,$modd)
    {
        if($modd >0){
            for($modd;$modd<6;$modd++){
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

    public function books(Request $request)
    {
        $data = $this->userData($request);
        $subGroup = $request->input('ProductGroupList')?:23;
        $data['Categories'] = $this->productCategories(7,$subGroup);
        $data['productSummary'] = $this->productSummary($subGroup);
        $data['title'] = 'Economix Books';
        $data['description'] = 'Economix Books';

        return view('books',$data);
    }

    public function stores($productGroup, Request $request)
    {
        $data = $this->userData($request);

        if( is_numeric(session()->get('user_id')) ){
            $data['have_debit_card'] = \App\Models\EcoDebitCards::where('user_id',session()->get('user_id'))->get();
        }
        else{
            $data['have_debit_card'] = [];
        }

        
        $data['stores'] = $this->storeList($productGroup);
        $data['product_group'] = $productGroup;
        if($productGroup == 38) {
            $data['title'] = 'Boutiques';
            $data['store_type'] = 'Boutique';
            $data['description'] = 'Member Boutiques';
        }
        elseif($productGroup == 39){
            $data['title'] = 'Art Galleries';
            $data['store_type'] = 'Art Gallery';
            $data['description'] = 'Member Art Galleries';
        }
        elseif($productGroup == 40){
            $data['title'] = 'Estate Sales';
            $data['store_type'] = 'Estate Sale';
            $data['description'] = 'Estate Sales';
        }
        elseif($productGroup == 41){
            $data['title'] = 'Services';
            $data['store_type'] = 'Services';
            $data['description'] = 'Member Services';
        }
        elseif($productGroup == 42){
            $data['title'] = 'Stores';
            $data['store_type'] = 'Stores';
            $data['description'] = 'Member Stores';
       }

       elseif($productGroup == 43){
            $data['title'] = 'Member Tool';
            $data['store_type'] = 'Member Tool';
            $data['description'] = 'Member Tool Galleries';
        }

        return view('stores',$data);
    }
    public function camping(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Camping Products';
        $data['description'] = 'Economix Camping Products';

        return view('camping',$data);
    }
    public function charities(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Charitable Donations';
        $data['description'] = 'Economix Charitable Donations';

        return view('charities',$data);
    }
    public function cooking(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Cooking Products';
        $data['description'] = 'Economix Cooking Products';

        return view('cooking',$data);
    }

    public function comparison(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Multi-Level Comparison';
        $data['description'] = 'Economix Multi-Level Comparison';

        return view('comparison',$data);
    }
    public function contact(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Contact';
        $data['description'] = 'Economix Contact';

        return view('contact',$data);
    }
    public function debitcards(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Payroll Cards';
        $data['description'] = 'Economix Payroll Cards';

        return view('debitcards',$data);
    }

    public function discount(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Member Discount';
        $data['description'] = 'Economix Member Discount';

        return view('discount',$data);
    }

    public function donations(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Charitable Donations';
        $data['description'] = 'Economix Charitable Donations';

        return view('donations',$data);
    }
    public function economically(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix economical benefit';
        $data['description'] = 'Economix Business Cards';

        return view('economically',$data);
    }
    public function emotionally(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Emotional Benefits';
        $data['description'] = 'Economix Emotional Benefits';

        return view('emotionally',$data);
    }
    public function energy(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Energy Products';
        $data['description'] = 'Economix Energy Products';

        return view('energy',$data);
    }
    public function experiences(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Member Experiences';
        $data['description'] = 'Economix Member Experiences';

        return view('experiences',$data);
    }
    public function food(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Food Products';
        $data['description'] = 'Economix Food Products';

        return view('food',$data);
    }
    public function founders(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Founders';
        $data['description'] = 'Economix Founders';

        return view('founders',$data);
    }
    public function groups(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Sponsored Groups';
        $data['description'] = 'Economix Sponsored Groups';

        return view('groups',$data);
    }
    public function health(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Health Products';
        $data['description'] = 'Economix Health Products';

        return view('health',$data);
    }

    public function house(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Household Products';
        $data['description'] = 'Economix Household Products';

        return view('house',$data);
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
        if($picture > '') {
            $editUser->picture = $picture;
        }
        $editUser->save();

        return $this->homepage($request);
    }
    public function homepage(Request $request)
    {
        $data = $this->userData($request);
        $userId = $request->session()->get('user_id');
        $editUser = Users::find($userId);
        $data['title'] = 'Economix Member Personal Information';
        $data['description'] = 'Economix Personal Information';
        $data = $this->userData($request);
        if($editUser) {
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
            return view('homepage',$data);
        }else{
            $data['selectNames'] = '';
            $data['title'] = 'Admin';
            $data['description'] = 'Admin';
            return view('management',$data);
        }

    }

    public function itemCount(Request $request)
    {
        $userId = $request->session()->get('user_id');
        $shoppingCart = new ShoppingCarts;
        return $shoppingCart->getItemCount($userId);
    }
    public function limitations(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Limitations on Marketing';
        $data['description'] = 'Economix Limitations on Marketing';

        return view('limitations',$data);
    }
    public function logout(Request $request)
    {
        $data = $this->userData($request);
        return view('logout',$data);
    }
    public function members(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Members';
        $data['description'] = 'Economix Members';

        return view('members',$data);
    }

    public function memberagreement(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Member Agreement';
        $data['description'] = 'Economix Member Agreement';

        return view('mem_agreement',$data);
    }

    public function membercost(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Member Cost';
        $data['description'] = 'Economix Member Cost';

        return view('membercost',$data);
    }
    public function memberterms(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Member Agreement Terms and Conditions';
        $data['description'] = 'Economix Member Agreement Terms and Conditions';

        return view('memberterms',$data);
    }
    public function money(Request $request)
    {
        $data = $this->userData($request);
        return view('money',$data);
    }

    public function people(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix People Involved';
        $data['description'] = 'Economix People Involved';

        return view('people',$data);
    }
    public function physically(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Physical Benefits';
        $data['description'] = 'Economix Physical Benefits';

        return view('physically',$data);
    }
    public function plans(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Business Plan';
        $data['description'] = 'Economix Business Plan';

        return view('plans',$data);
    }

    public function potential(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Potential Income';
        $data['description'] = 'Economix Potential Income';

        return view('potential',$data);
    }

    public function product($productId, Request $request)
    {
        $data = $this->userData($request);
        $product = Products::find($productId);
        $data['ItemCount'] = $this->itemCount($request);
        $data['Product'] = $product;
        $data['title'] = $product->product_name.' - '.$product->Author;
        $data['description'] = $product->description;

        return view($product->display_page,$data);
    }
    public function products(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Products';
        $data['description'] = 'Economix Products';

        return view('products',$data);
    }
    public function productsSum(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Products';
        $data['description'] = 'Economix Products';

        return view('productsSum',$data);
    }

    public function prepareSelect($productGroups, $selected)
    {
        $results = "<select name='ProductGroupList' style='width:300px;' onchange='this.form.submit()' > ";
        $selectField = ($selected == 0)?'selected':'';
      //  $results .= "<option value = '0' $selectField>All Users</option>";

        foreach($productGroups as $id=>$productGroup){
            $selectField = ($id == $selected)?'selected':'';
            $results .= "<option value ='".$id."' $selectField>$productGroup</option>";
        }
        $results .="</select>";
        return $results;
    }

    public function productCategories($productGroup, $selected)
    {
        $productGroups= ProductGroups::where('Parent_id',$productGroup)->orderBy('group_order')->lists('name','id');
        $select = $this->prepareSelect($productGroups, $selected);
        return $select;
    }


    public function productSummary($subGroup)
    {
        $results = '';

        $products = Products::where('product_group',$subGroup)->orderBy('group_order')->get();
        $results = '<tr>';
        $ctr= 0;
        $modd=0;
        if(count($products)==0){
            $results .= "<td>No books in this category, Coming Soon</td>";
            $ctr = 8;
        }

        foreach($products as $product){
            $results .= "<td class='eighth'><a href=\"product/$product->id\"><img src=\"images\\$product->image\" width=\"135px;\"></a></td>";
            $results .= "<td ><a href=\"product/$product->id\">";
            $description = "<b>".$product->product_name."</b><br>".$product->description."<br><b>".$product->Author."</b><br>".$product->display_description;
            $results .= substr($description,0,260)."...</a></td>";
            $ctr++;
            $ctr++;
            $modd = $ctr % 6;
            \Log::info("ctr=$ctr  mod=$modd");
            if($modd == 0){
                $results .= "</tr><tr>";
            }
        }
        $results = $this->addBlanks($results,$modd);
        $results .= "</tr>";
        return $results;
    }
    public function purpose(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Purpose';
        $data['description'] = 'Spiritual, Economic, Physical, Emotional';

        return view('purpose',$data);
    }
    public function policies(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Policies';
        $data['description'] = 'Policies';
        return view('policies',$data);
    }
    public function recycling(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Recycling Products';
        $data['description'] = 'Economix Recycling Products';

        return view('recycling',$data);
    }
    public function referral(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Referral Bonuses';
        $data['description'] = 'Economix Referral Bonuses';

        return view('referral',$data);
    }

    public function returns(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Return Policy';
        $data['description'] = 'Economix Return Policy';

        return view('returns',$data);
    }
    public function requirements(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Requirements for Bonuses';
        $data['description'] = 'Economix Requirements for Bonuses';

        return view('requirements',$data);
    }

    public function selection(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Product Selection';
        $data['description'] = 'Economix Product Selection';

        return view('selection',$data);
    }
    public function spiritually(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Spiritual Benefits';
        $data['description'] = 'Economix Spiritual Benefits';

        return view('spiritually',$data);
    }
    public function training(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Training Products';
        $data['description'] = 'Economix Training Products';

        return view('training',$data);
    }

    public function transfers(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Immediate Transfer of Funds';
        $data['description'] = 'Economix Immediate Transfer of Funds';

        return view('transfers',$data);
    }
    public function water(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Water Purification Products';
        $data['description'] = 'Economix Water Purification Products';

        return view('water',$data);
    }





    public function linksfood(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Video Food Production';
        $data['description'] = 'Economix Video Food Production';

        return view('linksfood',$data);
    }
    public function linkswater(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Video Water Purification';
        $data['description'] = 'Economix Video Water Purification';

        return view('linkswater',$data);
    }
    public function linksenergy(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Video Energy Production';
        $data['description'] = 'Solar, Water, Bio-gas Videos';

        return view('linksenergy',$data);
    }
    public function linksrecycling(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Video Recycling';
        $data['description'] = 'Economix Video Recycling';

        return view('linksrecycling',$data);
    }
    public function linkscamping(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Video Camping and Survival';
        $data['description'] = 'Video Camping and Survival';

        return view('linkscamping',$data);
    }
    public function linkscooking(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Video Cooking Systems';
        $data['description'] = 'Cooking Systems';

        return view('linkscooking',$data);
    }
    public function linkshealth(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Video Healthy Lifestyles';
        $data['description'] = 'Video Health Lifestyles';

        return view('linkshealth',$data);
    }
    public function linkshouse(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Video Household Products';
        $data['description'] = 'Video Household Products';

        return view('linkshouse',$data);
    }
    public function traininglinks(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Video Training Links';
        $data['description'] = 'Video Training Links';

        return view('traininglinks',$data);
    }
    public function introduction(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Introduction to Marketing Plan';
        $data['description'] = 'Introduction to Marketing Plan';

        return view('introduction',$data);
    }
    public function linksgardening(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Video Gardening';
        $data['description'] = 'Video Gardening';

        return view('linksgardening',$data);
    }
    public function linksgreenhouses(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Video Greenhouses';
        $data['description'] = 'Video Greenhouses';

        return view('linksgreenhouses',$data);
    }

    public function linkspoultry(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Video Poultry Raising';
        $data['description'] = 'Video Poultry Raising';

        return view('linkspoultry',$data);
    }
    public function linkslivestock(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Raising Livestock';
        $data['description'] = 'Raising Livestock';

        return view('linkslivestock',$data);
    }
    public function linksprotection(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Video Home Protection';
        $data['description'] = 'Video Home Protection';

        return view('linksprotection',$data);
    }
    public function linksorchards(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Video Orchard Management';
        $data['description'] = 'Video Orchard Management';

        return view('linksorchards',$data);
    }
    public function linksaquaponics(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Video Aquaponics Systems';
        $data['description'] = 'Video Aquaponics Systems';

        return view('linksaquaponics',$data);
    }

    public function linksbeekeeping(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Video Beekeeping';
        $data['description'] = 'Video Beekeeping';

        return view('linksbeekeeping',$data);
    }
    public function linksbiogas(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Video Bio-Gas Digestors';
        $data['description'] = 'Video Bio-Gas Digestors';

        return view('linksbiogas',$data);
    }

    public function storeList($productGroup)
    {
//        $data = $this->userData($request);
//        $data['title'] = 'Economix Video Bio-Gas Digestors';
//        $data['description'] = 'Video Bio-Gas Digestors';
//
//        return view('linksbiogas',$data);
        return UserStores::where('product_group',$productGroup)->orderBy('name')->get();
    }
    public function addImage($userId, Request $request)
    {

        $file = $request->file('file');
        if(!is_object($file)) return 0;
        $fileIsValid = $request->file('file')->isValid();
        if(!$fileIsValid) return 0;
        $mimeType = $file->getMimeType();
        if($mimeType != 'image/jpeg' and $mimeType != 'image/png') return 0;
        //  dd($mimeType);
        $extension = ($mimeType == 'image/jpeg')?'.jpeg':'.png';

        $destination = 'images';
        $name = 'user'.$userId.$extension;
        $file->move($destination, $name);

        return $name;
    }

    public function addnewdistributor(Request $request){

        $data = $this->userData($request);
        
        $data['title'] = 'Distributor';
        $data['description'] = 'Add New Distributor';
        $data['response'] = '';
        $data['act'] = $request->input('act');
        include_once(app_path() . '/Http/Controllers/usa_cities_states.php');
        $data['cities_states'] = $cities_states;
        $data['states'] = $state_list;
        if($request->input('act') == 'addnewdistributor'){
            // LIVE $api_url = 'https://epay.propay.com/api/propayapi.aspx';
            $api_url = 'https://xmltest.propay.com/api/propayapi.aspx'; //DEMO URL


            // LIVE $cert_str = '694a6da2e8f462191261a1cca76ce8';
            $cert_str = '266b61d4ee64b929624512be3a4d08'; // DEMO CERT_STR
            

            $post_data = $_POST;
            $envelope= '<?xml version="1.0"?>
                <!DOCTYPE Request.dtd>
                <XMLRequest>
                    <certStr>' . $cert_str .'</certStr>
                <class>partner</class>
                    <XMLTrans>
                        <transType>01</transType>
                        <sourceEmail>' . $request->input('email') . '</sourceEmail>
                        <firstName>' . $request->input('first_name') . '</firstName>
                        <lastName>' . $request->input('last_name') . '</lastName>
                        <addr>' . $request->input('address1') . '</addr>
                        <aptNum>' . $request->input('address2') . '</aptNum>
                        <city>' . $request->input('city') . '</city>
                        <state>' . $request->input('state') . '</state>
                        <zip>' . $request->input('postal_code') . '</zip>
                        <country>' . $request->input('country') . '</country>
                        <dayPhone>' . $request->input('day_phone') . '</dayPhone>
                        <evenPhone>' . $request->input('evening_phone') . '</evenPhone>
                        <externalId>' . rand(100,99999) . '</externalId>
                        <ssn>' . $request->input('ssn') . '</ssn>
                        <dob>' . $request->input('dob') . '</dob>
                        <tier>Card-Only</tier>                  
                        <timestamp>' . time() . '</timestamp>
                    </XMLTrans>
                 </XMLRequest>';
            
            $data['postdata'] = $post_data;
            $header = array(
                        "Content-type:text/xml; charset=\"utf-8\"",
                        "Accept: text/xml"
                    );

            $MSAPI_Call = curl_init();
            //Change the following URL to point to production instead of integration
            curl_setopt($MSAPI_Call, CURLOPT_URL, $api_url);
            curl_setopt($MSAPI_Call, CURLOPT_TIMEOUT, 30);
            curl_setopt($MSAPI_Call, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($MSAPI_Call, CURLOPT_POST, true);
            curl_setopt($MSAPI_Call, CURLOPT_POSTFIELDS, $envelope);
            curl_setopt($MSAPI_Call, CURLOPT_HTTPHEADER, $header);
            curl_setopt($MSAPI_Call, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($MSAPI_Call, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($MSAPI_Call, CURLOPT_HTTPAUTH, CURLAUTH_ANY);

            $api_response = curl_exec($MSAPI_Call);
            $err = curl_error($MSAPI_Call);
            curl_close($MSAPI_Call);
            //URL::to(Config::get('assets.' . $type) . '/' . $file)
            $response_status = simplexml_load_file(public_path('MSAPI_Response.xml'));
            $result = simplexml_load_string($api_response); 

            //Pretty Print response
            $api_result = new \DOMDocument('1.0');
            $api_result->preserveWhiteSpace = false;
            $api_result->formatOutput = true;
            $api_result->loadXML($api_response);
            $response = '';
            if(isset($result->XMLTrans->status)) {
                $status = $result->XMLTrans->status;
                if($status != '00') {
                    $status = '_'.$status;          
                    $status = $response_status->status->$status;
                    $response = "Transaction may not have completed successfully";
                    $response .= "\nTransaction Status: " . $status; 
                    $response .= "\n";
                    $response .= $api_result->saveXML();
                    
                    // Save this response in session for showing on thank you page
                    $data['addnewdistri_failure_msg'] = [
                        'status' => $status
                    ];

                    $flag = 'failure';
                } else {        
                    $user_name = $result->XMLTrans->sourceEmail;
                    $user_password = $result->XMLTrans->password;
                    $user_account_number = $result->XMLTrans->accntNum;
                    $user_tier = $result->XMLTrans->tier;           
                    $response = "Transaction completed successfully";
                    $status = '_'.$status;          
                    $status = $response_status->status->$status;
                    $response .= "\nTransaction Status: " . $status; 
                    $response .= "\nAccount Number: " . $user_account_number;
                    $response .= "\nUser Name: " . $user_name;
                    $response .= "\nTemporary Password: " . $user_password;
                    $response .= "\nAssigned Tier: " . $user_tier;

                    // Save this response in session for showing on thank you page
                    $data['addnewdistri_success_msg'] = [
                        'status' => (array)$status,
                        'acc_num' => (array)$user_account_number,
                        'user_name' => (array)$user_name,
                        'temp_pass' => (array)$user_password,
                        'assigned_tier' => (array)$user_tier
                    ];
                    $flag = 'success';

                }       
                
            } else {
                $response .= $api_result->saveXML();
            };
            $data['response'] = $response;

            $data['envelope'] = $envelope;
            
            if( $flag == 'failure' ){
                $data['title'] = 'Registration Failed';
                $data['description'] = 'Registration Failed';
                return view('distributer_failure',$data);
            }
            elseif( $flag == 'success' ){

                $data['title'] = 'Thank You';
                $data['description'] = 'Successful transaction page';
                return view('distributer_thanks',$data);
            }

        }
        
        $data['cuntries'] = array(
                'ABW'=>'Aruba',
                'AFG'=>'Afghanistan',
                'AGO'=>'Angola',
                'AIA'=>'Anguilla',
                'ALA'=>'Åland Islands',
                'ALB'=>'Albania',
                'AND'=>'Andorra',
                'ARE'=>'United Arab Emirates',
                'ARG'=>'Argentina',
                'ARM'=>'Armenia',
                'ASM'=>'American Samoa',
                'ATA'=>'Antarctica',
                'ATF'=>'French Southern Territories',
                'ATG'=>'Antigua and Barbuda',
                'AUS'=>'Australia',
                'AUT'=>'Austria',
                'AZE'=>'Azerbaijan',
                'BDI'=>'Burundi',
                'BEL'=>'Belgium',
                'BEN'=>'Benin',
                'BES'=>'Bonaire, Sint Eustatius and Saba',
                'BFA'=>'Burkina Faso',
                'BGD'=>'Bangladesh',
                'BGR'=>'Bulgaria',
                'BHR'=>'Bahrain',
                'BHS'=>'Bahamas',
                'BIH'=>'Bosnia and Herzegovina',
                'BLM'=>'Saint Barthélemy',
                'BLR'=>'Belarus',
                'BLZ'=>'Belize',
                'BMU'=>'Bermuda',
                'BOL'=>'Bolivia, Plurinational State of',
                'BRA'=>'Brazil',
                'BRB'=>'Barbados',
                'BRN'=>'Brunei Darussalam',
                'BTN'=>'Bhutan',
                'BVT'=>'Bouvet Island',
                'BWA'=>'Botswana',
                'CAF'=>'Central African Republic',
                'CAN'=>'Canada',
                'CCK'=>'Cocos (Keeling) Islands',
                'CHE'=>'Switzerland',
                'CHL'=>'Chile',
                'CHN'=>'China',
                'CIV'=>'Côte d\'Ivoire',
                'CMR'=>'Cameroon',
                'COD'=>'Congo, the Democratic Republic of the',
                'COG'=>'Congo',
                'COK'=>'Cook Islands',
                'COL'=>'Colombia',
                'COM'=>'Comoros',
                'CPV'=>'Cape Verde',
                'CRI'=>'Costa Rica',
                'CUB'=>'Cuba',
                'CUW'=>'Curaçao',
                'CXR'=>'Christmas Island',
                'CYM'=>'Cayman Islands',
                'CYP'=>'Cyprus',
                'CZE'=>'Czech Republic',
                'DEU'=>'Germany',
                'DJI'=>'Djibouti',
                'DMA'=>'Dominica',
                'DNK'=>'Denmark',
                'DOM'=>'Dominican Republic',
                'DZA'=>'Algeria',
                'ECU'=>'Ecuador',
                'EGY'=>'Egypt',
                'ERI'=>'Eritrea',
                'ESH'=>'Western Sahara',
                'ESP'=>'Spain',
                'EST'=>'Estonia',
                'ETH'=>'Ethiopia',
                'FIN'=>'Finland',
                'FJI'=>'Fiji',
                'FLK'=>'Falkland Islands (Malvinas)',
                'FRA'=>'France',
                'FRO'=>'Faroe Islands',
                'FSM'=>'Micronesia, Federated States of',
                'GAB'=>'Gabon',
                'GBR'=>'United Kingdom',
                'GEO'=>'Georgia',
                'GGY'=>'Guernsey',
                'GHA'=>'Ghana',
                'GIB'=>'Gibraltar',
                'GIN'=>'Guinea',
                'GLP'=>'Guadeloupe',
                'GMB'=>'Gambia',
                'GNB'=>'Guinea-Bissau',
                'GNQ'=>'Equatorial Guinea',
                'GRC'=>'Greece',
                'GRD'=>'Grenada',
                'GRL'=>'Greenland',
                'GTM'=>'Guatemala',
                'GUF'=>'French Guiana',
                'GUM'=>'Guam',
                'GUY'=>'Guyana',
                'HKG'=>'Hong Kong',
                'HMD'=>'Heard Island and McDonald Islands',
                'HND'=>'Honduras',
                'HRV'=>'Croatia',
                'HTI'=>'Haiti',
                'HUN'=>'Hungary',
                'IDN'=>'Indonesia',
                'IMN'=>'Isle of Man',
                'IND'=>'India',
                'IOT'=>'British Indian Ocean Territory',
                'IRL'=>'Ireland',
                'IRN'=>'Iran, Islamic Republic of',
                'IRQ'=>'Iraq',
                'ISL'=>'Iceland',
                'ISR'=>'Israel',
                'ITA'=>'Italy',
                'JAM'=>'Jamaica',
                'JEY'=>'Jersey',
                'JOR'=>'Jordan',
                'JPN'=>'Japan',
                'KAZ'=>'Kazakhstan',
                'KEN'=>'Kenya',
                'KGZ'=>'Kyrgyzstan',
                'KHM'=>'Cambodia',
                'KIR'=>'Kiribati',
                'KNA'=>'Saint Kitts and Nevis',
                'KOR'=>'Korea, Republic of',
                'KWT'=>'Kuwait',
                'LAO'=>'Lao People\'s Democratic Republic',
                'LBN'=>'Lebanon',
                'LBR'=>'Liberia',
                'LBY'=>'Libya',
                'LCA'=>'Saint Lucia',
                'LIE'=>'Liechtenstein',
                'LKA'=>'Sri Lanka',
                'LSO'=>'Lesotho',
                'LTU'=>'Lithuania',
                'LUX'=>'Luxembourg',
                'LVA'=>'Latvia',
                'MAC'=>'Macao',
                'MAF'=>'Saint Martin (French part)',
                'MAR'=>'Morocco',
                'MCO'=>'Monaco',
                'MDA'=>'Moldova, Republic of',
                'MDG'=>'Madagascar',
                'MDV'=>'Maldives',
                'MEX'=>'Mexico',
                'MHL'=>'Marshall Islands',
                'MKD'=>'Macedonia, the former Yugoslav Republic of',
                'MLI'=>'Mali',
                'MLT'=>'Malta',
                'MMR'=>'Myanmar',
                'MNE'=>'Montenegro',
                'MNG'=>'Mongolia',
                'MNP'=>'Northern Mariana Islands',
                'MOZ'=>'Mozambique',
                'MRT'=>'Mauritania',
                'MSR'=>'Montserrat',
                'MTQ'=>'Martinique',
                'MUS'=>'Mauritius',
                'MWI'=>'Malawi',
                'MYS'=>'Malaysia',
                'MYT'=>'Mayotte',
                'NAM'=>'Namibia',
                'NCL'=>'New Caledonia',
                'NER'=>'Niger',
                'NFK'=>'Norfolk Island',
                'NGA'=>'Nigeria',
                'NIC'=>'Nicaragua',
                'NIU'=>'Niue',
                'NLD'=>'Netherlands',
                'NOR'=>'Norway',
                'NPL'=>'Nepal',
                'NRU'=>'Nauru',
                'NZL'=>'New Zealand',
                'OMN'=>'Oman',
                'PAK'=>'Pakistan',
                'PAN'=>'Panama',
                'PCN'=>'Pitcairn',
                'PER'=>'Peru',
                'PHL'=>'Philippines',
                'PLW'=>'Palau',
                'PNG'=>'Papua New Guinea',
                'POL'=>'Poland',
                'PRI'=>'Puerto Rico',
                'PRK'=>'Korea, Democratic People\'s Republic of',
                'PRT'=>'Portugal',
                'PRY'=>'Paraguay',
                'PSE'=>'Palestinian Territory, Occupied',
                'PYF'=>'French Polynesia',
                'QAT'=>'Qatar',
                'REU'=>'Réunion',
                'ROU'=>'Romania',
                'RUS'=>'Russian Federation',
                'RWA'=>'Rwanda',
                'SAU'=>'Saudi Arabia',
                'SDN'=>'Sudan',
                'SEN'=>'Senegal',
                'SGP'=>'Singapore',
                'SGS'=>'South Georgia and the South Sandwich Islands',
                'SHN'=>'Saint Helena, Ascension and Tristan da Cunha',
                'SJM'=>'Svalbard and Jan Mayen',
                'SLB'=>'Solomon Islands',
                'SLE'=>'Sierra Leone',
                'SLV'=>'El Salvador',
                'SMR'=>'San Marino',
                'SOM'=>'Somalia',
                'SPM'=>'Saint Pierre and Miquelon',
                'SRB'=>'Serbia',
                'SSD'=>'South Sudan',
                'STP'=>'Sao Tome and Principe',
                'SUR'=>'Suriname',
                'SVK'=>'Slovakia',
                'SVN'=>'Slovenia',
                'SWE'=>'Sweden',
                'SWZ'=>'Swaziland',
                'SXM'=>'Sint Maarten (Dutch part)',
                'SYC'=>'Seychelles',
                'SYR'=>'Syrian Arab Republic',
                'TCA'=>'Turks and Caicos Islands',
                'TCD'=>'Chad',
                'TGO'=>'Togo',
                'THA'=>'Thailand',
                'TJK'=>'Tajikistan',
                'TKL'=>'Tokelau',
                'TKM'=>'Turkmenistan',
                'TLS'=>'Timor-Leste',
                'TON'=>'Tonga',
                'TTO'=>'Trinidad and Tobago',
                'TUN'=>'Tunisia',
                'TUR'=>'Turkey',
                'TUV'=>'Tuvalu',
                'TWN'=>'Taiwan, Province of China',
                'TZA'=>'Tanzania, United Republic of',
                'UGA'=>'Uganda',
                'UKR'=>'Ukraine',
                'UMI'=>'United States Minor Outlying Islands',
                'URY'=>'Uruguay',
                'USA'=>'United States',
                'UZB'=>'Uzbekistan',
                'VAT'=>'Holy See (Vatican City State)',
                'VCT'=>'Saint Vincent and the Grenadines',
                'VEN'=>'Venezuela, Bolivarian Republic of',
                'VGB'=>'Virgin Islands, British',
                'VIR'=>'Virgin Islands, U.S.',
                'VNM'=>'Viet Nam',
                'VUT'=>'Vanuatu',
                'WLF'=>'Wallis and Futuna',
                'WSM'=>'Samoa',
                'YEM'=>'Yemen',
                'ZAF'=>'South Africa',
                'ZMB'=>'Zambia',
                'ZWE'=>'Zimbabwe'
                );
        return view('addnewdistributor',$data);
    }

    public function paytodistributor(Request $request){

        $data = $this->userData($request);
        $data['title'] = 'Distributor';
        $data['description'] = 'Pay to Distributor';
        $data['response'] = '';
        $data['act'] = $request->input('act');
        if($request->input('act') == 'paytodistributor'){
            // $api_url = 'https://epay.propay.com/api/propayapi.aspx';
            $api_url = 'https://xmltest.propay.com/api/propayapi.aspx';
            
            // $cert_str = 'f5980c70ba14a64861535aab9de0a7';
            $cert_str = 'ca08a19ee8f439598dd407055aa1ae';
            
            $post_data = $_POST;
            $envelope = '<?xml version="1.0"?>
                 <!DOCTYPE Request.dtd>
                 <XMLRequest>
                     <certStr>' . $cert_str . '</certStr>
                     <class>partner</class>
                     <XMLTrans>
                         <transType>02</transType>
                         <amount>' . $request->input('amount') . '</amount>
                         <recAccntNum>' . $request->input('to_account') . '</recAccntNum>
                         <invNum>' . $request->input('invoice_number') . '</invNum>
                         <comment1>' . $request->input('comment') . '</comment1>
                     </XMLTrans>
                 </XMLRequest>';
            $data['postdata'] = $post_data;
            $header = array(
                        "Content-type:text/xml; charset=\"utf-8\"",
                        "Accept: text/xml"
                    );

            $MSAPI_Call = curl_init();
            //Change the following URL to point to production instead of integration
            curl_setopt($MSAPI_Call, CURLOPT_URL, $api_url);
            curl_setopt($MSAPI_Call, CURLOPT_TIMEOUT, 30);
            curl_setopt($MSAPI_Call, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($MSAPI_Call, CURLOPT_POST, true);
            curl_setopt($MSAPI_Call, CURLOPT_POSTFIELDS, $envelope);
            curl_setopt($MSAPI_Call, CURLOPT_HTTPHEADER, $header);
            curl_setopt($MSAPI_Call, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($MSAPI_Call, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($MSAPI_Call, CURLOPT_HTTPAUTH, CURLAUTH_ANY);

            $api_response = curl_exec($MSAPI_Call);
            $err = curl_error($MSAPI_Call);
            curl_close($MSAPI_Call);

            $response_status = simplexml_load_file(public_path('MSAPI_Response.xml'));
            $result = simplexml_load_string($api_response); 
            //Pretty Print response
            $api_result = new \DOMDocument('1.0');
            $api_result->preserveWhiteSpace = false;
            $api_result->formatOutput = true;
            $api_result->loadXML($api_response);
            $response = '';
            if(isset($result->XMLTrans->status)) {
                $status = $result->XMLTrans->status;
                if($status != '00') {
                    $status = '_'.$status;          
                    $status = $response_status->status->$status;
                    $response = "Transaction may not have completed successfully";
                    $response .= "\nTransaction Status: " . $status; 
                    $response .= "\n";
                    $response .= $api_result->saveXML();
                    
                } else {        
                    $user_name = $result->XMLTrans->sourceEmail;
                    $user_password = $result->XMLTrans->password;
                    $user_account_number = $result->XMLTrans->accntNum;
                    $user_tier = $result->XMLTrans->tier;           
                    $response = "Transaction completed successfully";
                    $status = '_'.$status;          
                    $status = $response_status->status->$status;
                    $response .= "\nTransaction Status: " . $status; 
                    $response .= "\nAccount Number: " . $user_account_number;
                    $response .= "\nUser Name: " . $user_name;
                    $response .= "\nTemporary Password: " . $user_password;
                    $response .= "\nAssigned Tier: " . $user_tier;
                }       
                
            } else {
                $response .= $api_result->saveXML();
            };
            $data['response'] = $response;
            $data['envelope'] = $envelope;
        }
        
        return view('paytodistributor',$data);
    }

    public function thanks(){
        $data = $this->userData(request());
        $data['title'] = 'Thank You';
        $data['description'] = 'Successful transaction page';
        return view('distributer_thanks',$data);
    }

    public function error(){
        $data = $this->userData(request());
        $data['title'] = 'Registration Failed';
        $data['description'] = 'Registration Failed';
        return view('distributer_failure',$data);
    }
}
