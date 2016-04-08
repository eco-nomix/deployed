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
        return view('welcome2',$data);
    }
    public function about(Request $request)
    {
        $data = $this->userData($request);
        return view('about',$data);
    }
    public function accounting(Request $request)
    {
        $data = $this->userData($request);
        return view('accounting',$data);
    }

    public function autoship(Request $request)
    {
        $data = $this->userData($request);
        return view('autoship',$data);
    }

    public function benefits(Request $request)
    {
        $data = $this->userData($request);
        return view('benefits',$data);
    }
    public function businesscards(Request $request)
    {
        $data = $this->userData($request);
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
        return view('referrallinks',$data);
    }

    public function selfreliance(Request $request)
    {
        $data = $this->userData($request);
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

        return view('books',$data);
    }
    public function camping(Request $request)
    {
        $data = $this->userData($request);
        return view('camping',$data);
    }
    public function charities(Request $request)
    {
        $data = $this->userData($request);
        return view('charities',$data);
    }
    public function cooking(Request $request)
    {
        $data = $this->userData($request);
        return view('cooking',$data);
    }

    public function comparison(Request $request)
    {
        $data = $this->userData($request);
        return view('comparison',$data);
    }
    public function contact(Request $request)
    {
        $data = $this->userData($request);
        return view('contact',$data);
    }
    public function debitcards(Request $request)
    {
        $data = $this->userData($request);
        return view('debitcards',$data);
    }

    public function discount(Request $request)
    {
        $data = $this->userData($request);
        return view('discount',$data);
    }

    public function donations(Request $request)
    {
        $data = $this->userData($request);
        return view('donations',$data);
    }
    public function economically(Request $request)
    {
        $data = $this->userData($request);
        return view('economically',$data);
    }
    public function emotionally(Request $request)
    {
        $data = $this->userData($request);
        return view('emotionally',$data);
    }
    public function energy(Request $request)
    {
        $data = $this->userData($request);
        return view('energy',$data);
    }
    public function experiences(Request $request)
    {
        $data = $this->userData($request);
        return view('experiences',$data);
    }
    public function food(Request $request)
    {
        $data = $this->userData($request);
        return view('food',$data);
    }
    public function founders(Request $request)
    {
        $data = $this->userData($request);
        return view('founders',$data);
    }
    public function groups(Request $request)
    {
        $data = $this->userData($request);
        return view('groups',$data);
    }
    public function health(Request $request)
    {
        $data = $this->userData($request);
        return view('health',$data);
    }

    public function house(Request $request)
    {
        $data = $this->userData($request);
        return view('house',$data);
    }
    public function homepage(Request $request)
    {
        $data = $this->userData($request);
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
        return view('members',$data);
    }

    public function membercost(Request $request)
    {
        $data = $this->userData($request);
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
        return view('people',$data);
    }
    public function physically(Request $request)
    {
        $data = $this->userData($request);
        return view('physically',$data);
    }
    public function plans(Request $request)
    {
        $data = $this->userData($request);
        return view('plans',$data);
    }

    public function potential(Request $request)
    {
        $data = $this->userData($request);
        return view('potential',$data);
    }

    public function product($productId, Request $request)
    {
        $data = $this->userData($request);
        $product = Products::find($productId);
        $data['ItemCount'] = $this->itemCount($request);
        $data['Product'] = $product;
        return view($product->display_page,$data);
    }
    public function products(Request $request)
    {
        $data = $this->userData($request);
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
        return view('purpose',$data);
    }
    public function recycling(Request $request)
    {
        $data = $this->userData($request);
        return view('recycling',$data);
    }
    public function referral(Request $request)
    {
        $data = $this->userData($request);
        return view('referral',$data);
    }
    public function requirements(Request $request)
    {
        $data = $this->userData($request);
        return view('requirements',$data);
    }

    public function selection(Request $request)
    {
        $data = $this->userData($request);
        return view('selection',$data);
    }
    public function spiritually(Request $request)
    {
        $data = $this->userData($request);
        return view('spiritually',$data);
    }
    public function training(Request $request)
    {
        $data = $this->userData($request);
        return view('training',$data);
    }

    public function transfers(Request $request)
    {
        $data = $this->userData($request);
        return view('transfers',$data);
    }
    public function water(Request $request)
    {
        $data = $this->userData($request);
        return view('water',$data);
    }
    public function linksfood(Request $request)
    {
        $data = $this->userData($request);
        return view('linksfood',$data);
    }
    public function linkswater(Request $request)
    {
        $data = $this->userData($request);
        return view('linkswater',$data);
    }
    public function linksenergy(Request $request)
    {
        $data = $this->userData($request);
        return view('linksenergy',$data);
    }
    public function linksrecycling(Request $request)
    {
        $data = $this->userData($request);
        return view('linksrecycling',$data);
    }
    public function linkscamping(Request $request)
    {
        $data = $this->userData($request);
        return view('linkscamping',$data);
    }
    public function linkscooking(Request $request)
    {
        $data = $this->userData($request);
        return view('linkscooking',$data);
    }
    public function linkshealth(Request $request)
    {
        $data = $this->userData($request);
        return view('linkshealth',$data);
    }
    public function linkshouse(Request $request)
    {
        $data = $this->userData($request);
        return view('linkshouse',$data);
    }


}
