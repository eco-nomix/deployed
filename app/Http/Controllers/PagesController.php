<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\ProductGroups;
use App\Models\Products;
use App\Models\ShoppingCarts;
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
            $data['imageUrl'] = '../images/Depositphotos_15642717_l-2015.jpg';
            $data['message'] = 'Eco-nomix\'s purpose is to provide the highest
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
    public function homepage(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Member Homepage';
        $data['description'] = 'Economix Member Homepage';

        return view('homepage',$data);
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

    public function membercost(Request $request)
    {
        $data = $this->userData($request);
        $data['title'] = 'Economix Member Cost';
        $data['description'] = 'Economix Member Cost';

        return view('membercost',$data);
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

}
