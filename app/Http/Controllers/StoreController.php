<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Requests;
use App\Models\UserStores;
use App\Models\Products;
use App\Models\ShippingTypes;
use App\Models\ShoppingCarts;
use App\Models\ProductGroups;
use App\Models\ProductCategories;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function store($storeId, Request $request)
    {
        $userStore = UserStores::find($storeId);
        $user = Users::find($userStore->user_id);
        $data = $this->userData($request);
        $data['store'] = $userStore;
        $data['user'] = $user;
        $data['productSummary'] = $this->storeSummary($storeId);
        $data['title'] = $userStore->name;
        $data['store_type'] = $userStore->store_type;
        $data['owner'] = $userStore->owner_description;
        $data['description'] = 'Member Stores';

        return view('store',$data);
    }
    public function storeSummary($storeId)
    {
        $results = '';

        $products = Products::where('store_id',$storeId)->orderBy('product_name')->get();
        $results = '<tr>';
        $ctr= 0;
        $modd=0;
        if(count($products)==0){
            $results .= "<td>No Products in this Store, Coming Soon</td>";
            $ctr = 8;
        }

        foreach($products as $product){
            $results .= "<td class='eighth'><a href=\"$storeId/product/$product->id\"><img src=\"/images\\$product->image\" width=\"135px;\"></a></td>";
            $results .= "<td class='fifth' ><a href=\"$storeId/product/$product->id\">";
            $description = "<b>".$product->product_name."</b><br>".$product->description."<br><b>".$product->display_description;
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
    public function oneKindSummary()
    {
        $results = '';

        $products = Products::where('one_of_a_kind',1)->orderBy('product_name')->get();
        $results = '<tr>';
        $ctr= 0;
        $modd=0;
        if(count($products)==0){
            $results .= "<td>No Products in One of a Kind, Coming Soon</td>";
            $ctr = 8;
        }

        foreach($products as $product){
            $results .= "<td class='eighth'><a href=\"/onekind/$product->id\"><img src=\"/images\\$product->image\" width=\"135px;\"></a></td>";
            $results .= "<td class='fifth' ><a href=\"/onekind/$product->id\">";
            $description = "<b>".$product->product_name."</b><br>".$product->description."<br><b>".$product->display_description;
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

    public function oneKindSummarySub($productCategory)
    {
        $results = '';
        if ($productCategory > 0) {
            $products = Products::where('one_of_a_kind', 1)->where('product_category', $productCategory)->orderBy('product_name')->get();
        }
        else{
            $products = Products::where('one_of_a_kind', 1)->orderBy('product_name')->get();

        }
        $results = '<tr>';
        $ctr= 0;
        $modd=0;
        if(count($products)==0){
            $results .= "<td>No Products in One of a Kind, Coming Soon</td>";
            $ctr = 8;
        }

        foreach($products as $product){
            $results .= "<td class='eighth'><a href=\"/onekind/$product->id\"><img src=\"/images\\$product->image\" width=\"135px;\"></a></td>";
            $results .= "<td class='fifth' ><a href=\"/onekind/$product->id\">";
            $description = "<b>".$product->product_name."</b><br>".$product->description."<br><b>".$product->display_description;
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
    public function addBlanks($results,$modd)
    {
        if($modd >0){
            for($modd;$modd<6;$modd++){
                 if($modd % 2){
                     $cl = "";
                  }else{
                     $cl = "class = 'eighth'";
                 }

                $results .= "<td $cl>&nbsp;";
            }
        }
        return $results;
    }
    public function displayproduct($storeId, $productId, Request $request)
{
    $userStore = UserStores::find($storeId);
    $product = Products::find($productId);
    $user = Users::find($userStore->user_id);
    $data = $this->userData($request);
    $data['store'] = $userStore;
    $data['user'] = $user;
    $data['ItemCount'] = $this->itemCount($request);
    $data['title'] = $userStore->product_name;
    $data['Product'] = $product;
    return view('store_product',$data);
}
    public function onekindproduct($productId, Request $request)
    {

        $product = Products::find($productId);
        $store = UserStores::find($product->store_id);
        $user = Users::find($store->user_id);
        $data = $this->userData($request);
        $data['store'] = $store;
        $data['user'] = $user;
        $data['ItemCount'] = $this->itemCount($request);
        $data['title'] = $store->product_name;

        $data['Product'] = $product;
        $data['wholesale'] = number_format($product->member*.6,2);
        return view('store_product',$data);
    }
    public function saveeditproduct($storeId, $productId, Request $request)
    {
        $store = UserStores::find($storeId);
        $product = Products::find($productId);
        $user = Users::find($store->user_id);
        $image = $this->addProductImage( $request,$productId);
        if($image > '') {
            $product->image = $image;
        }
        $product->product_name = $request->input('product_name');
        $product->description = $request->input('description');
        $wholesale = $request->input('wholesale');
        $member = str_replace(',','',number_format(($wholesale/.6),2));
        $nonmember = str_replace(',','',number_format(($wholesale/.55),2));
      //  dd($wholesale, $member, $nonmember);
        $product->member = $member;
        $product->non_member = $nonmember;
        $product->retail = $product->non_member;
        $product->shipping_weight = $request->input('shipping_weight');
        $product->cost_shipping = $request->input('cost_shipping');
        $product->display_description = $request->input('display_description');
        $product->physical_description = $request->input('physical_description');
        $product->one_of_a_kind = $request->input('one_of_a_kind');
        $product->product_category = $request->input('product_category');
        $product->save();
        $data = $this->userData($request);
        $data['store'] = $store;
        $data['Product'] = $product;
        $data['wholesale'] = str_replace(',','',number_format($wholesale,2));
        $data['user'] = $user;
        $data['name']=$store->name;
        $data['categories']  = $this->storeCategories();
        $data['logo'] = $store->logo;

        return view('store_edit_product',$data);
    }
    public function editproduct($storeId, $productId, Request $request)
    {

        $store = UserStores::find($storeId);
        $product = Products::find($productId);
        $user = Users::find($store->user_id);
        $data = $this->userData($request);
        $data['store'] = $store;
        $data['Product'] = $product;
        $data['wholesale'] = str_replace(',','',number_format($product->member*.6,2));
        $data['user'] = $user;
        $data['name']=$store->name;
        $data['logo'] = $store->logo;
        $data['categories']  = $this->storeCategories();

        return view('store_edit_product',$data);
    }

    public function addStore($productGroup,$userId,Request $request)
    {

        $user = Users::find($userId);
        \Log::info("in add store pg=$productGroup  UserId=$userId");
        $stores = UserStores::where('product_group',$productGroup)->where('user_id',$userId)->orderBy('name')->lists('name','id');
        $data = $this->userData($request);
        $data['stores'] = $stores;
        $data['shippingTypes'] = $this->shipping();
        $data['title'] = 'Add New Store';
        $data['product_group'] = $productGroup;
        $data['store_type'] = $this->storeType($productGroup);
        $data['description'] = 'Add New Store';
        return view('store_add',$data);
    }

    public function storeType($productGroup)
    {

        $storeType= ProductGroups::find($productGroup);
        return $storeType->name;
    }

    public function saveStore($productGroup,$userId, Request $request)
    {
        if ($request->input('name')==''){
            return $this->addStore($productGroup,$userId,$request);
        }
        $store = UserStores::create(['name'=>$request->input('name'),
            'gen_description'=>$request->input('gen_description'),
            'user_id'=>$userId,
            'detailed_description'=>$request->input('detailed_description'),
            'allow_custom_requests'=>$request->input('allow_custom_requests'),
            'shipping_id'=>$request->input('shipping_id'),
            'owner_description' => $request->input('owner_description'),
            'product_group' => $productGroup,
            'store_type'=> $this->storeType($productGroup),
            'handling_charge'=>$request->input('handling')]);

        $name = $this->addImage($userId, $request, $store->id);
        $store->logo = $name;
        $store->save();
        return $this->addStore($productGroup,$userId,$request);
    }

    public function editStore($storeId,Request $request)
    {
        $store = UserStores::find($storeId);
        $user = Users::find($store->user_id);
        $stores = UserStores::where('user_id',$user->id)->orderBy('name')->lists('name','id');
        $data = $this->userData($request);

        $data['stores'] = $stores;
        $data['storeId'] = $store->id;
        $data['shippingTypes'] = $this->shipping();
        $data['title'] = 'Add New Store';
        $data['description'] = 'Add New Store';
        $data['name']=$store->name;
        $data['gen_description'] = $store->gen_description;
        $data['logo'] = $store->logo;
        $data['id'] = $store->id;
        $data['detailed_description'] = $store->detailed_description;
        $data['shipping_id'] = $store->shipping_id;
        $data['store_type'] = $store->store_type;
        $data['owner_description'] = $store->owner_description;
        $data['allow_custom_requests'] = $store->allow_custom_requests;
        $data['handling_charge'] = $store->handling_charge;
        return view('store_edit',$data);

    }

    public function saveeditStore($storeId,Request $request)
    {
        $addProducts = $request->input('addProducts');
        \Log::info("addProducts = $addProducts");
        \Log::info("storeId=$storeId");
        $store = UserStores::find($storeId);
        if($request->input('Delete')){
            $productGroup = $store->product_group;
            $userId = $store->user_id;
            $store->delete();
            return $this->addStore($productGroup,$userId,$request);
        }

        $user = Users::find($store->user_id);
        $logo = $this->addImage($user->id, $request, $store->id);
        if($logo > '') {
            $store->logo = $logo;
        }
        if($request->input('name')> '') {
            $store->name = $request->input('name');
        }
        if ($request->input('gen_description')> '') {
            $store->gen_description = $request->input('gen_description');
        }
        if ($request->input('detailed_description')>'') {
            $store->detailed_description = $request->input('detailed_description');
        }
        if ($request->input('owner_description')>'') {
            $store->owner_description = $request->input('owner_description');
        }
        $store->allow_custom_requests = $request->input('allow_custom_requests');
        $store->shipping_id = $request->input('shipping_id');
        $store->handling_charge = $request->input('handling');
        $store->save();
        if ($addProducts) {
            return $this->addProducts($storeId, $request);
        }
        $stores = UserStores::where('user_id',$user->id)->orderBy('name')->lists('name','id');
        $data = $this->userData($request);
        $data['stores'] = $stores;
        $data['shippingTypes'] = $this->shipping();
        $data['title'] = 'Add New Store';
        $data['description'] = 'Add New Store';
        $data['name']=$store->name;
        $data['gen_description'] = $store->gen_description;
        $data['logo'] = $store->logo;
        $data['id'] = $store->id;
        $data['detailed_description'] = $store->detailed_description;
        $data['owner_description'] = $store->owner_description;
        $data['shipping_id'] = $store->shipping_id;
        $data['storeId'] = $store->id;
        $data['store_type'] = $store->store_type;
        $data['allow_custom_requests'] = $store->allow_custom_requests;
        $data['handling_charge'] = $store->handling_charge;

        return view('store_edit',$data);

    }
    public function itemCount(Request $request)
    {
        $userId = $request->session()->get('user_id');
        $shoppingCart = new ShoppingCarts;
        return $shoppingCart->getItemCount($userId);
    }
    public function addProduct($storeId,Request $request)
    {
        $store = UserStores::find($storeId);
        $user = Users::find($store->user_id);

        $product = new Products;
        $product->product_name = $request->input('product_name');
        $product->description = $request->input('description');
        $product->display_description = $request->input('display_description');
        $product->Author = $store->name;
        $product->retail = $request->input('retail');
        $product->non_member = $request->input('retail');
        $product->shipping_weight = $request->input('shipping_weight');
        $product->member = $request->input('retail');
        $product->cost_shipping = $request->input('cost_shipping');
        $product->pay_bonus = 1;
        $product->physical_description = $request->input('physical_description');
        $product->store_id = $store->id;
        $product->one_of_a_kind = $request->input('one_of_a_kind');
        $product->product_category = $request->input('product_category');
        $product->save();
        $picture = $this->addProductImage($request, $product->id);
        if($picture > '') {
            $product->image = $picture;
            $product->save();
        }
        return redirect("store/$store->id");
    }

    Public function deleteProduct($storeId,$productId, Request $request)
    {
        $product = Products::find($productId)->delete();
        return redirect("store/$storeId");
    }

    Public function addProducts($storeId, Request $request)
    {
        $store = UserStores::find($storeId);
        $user = Users::find($store->user_id);
        $data = $this->userData($request);
        $data['store'] = $store;
        $data['user'] = $user;
        $data['name']=$store->name;
        $data['logo'] = $store->logo;
        $data['products'] = $this->storeProducts($storeId);
        $data['categories']  = $this->storeCategories();

        return view('store_products',$data);

    }

    public function storeCategories()
    {
        return ProductCategories::orderBy('display_order')->lists('name','id');
    }

    public function addProductImage(Request $request, $productId)
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
        $name = 'store_product_'.$productId.$extension;
        $file->move($destination, $name);
        return $name;
    }

    public function addImage($userId, Request $request,$storeId)
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
        $name = 'store_logo_'.$storeId.$extension;
        $file->move($destination, $name);

       return $name;
    }

    public function shipping()
    {
        return ShippingTypes::orderBy('description')->lists('description','id');
    }

    public function storeProducts($storeId)
    {
        return Products::where('store_id',$storeId)->orderBy('product_name')->get();

    }

    public function addStoreProduct($storeId)
    {

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
        $user = Users::find($data['user_id']);
        if($user){
            $referralLink = "http://eco-nomix.org/referred/$user->id";
        }else{
            $referralLink = "Not Logged in";
        }
        $data['referral_link'] = $referralLink;
        $data['errors'] = [];
        $data['userRoles'] = $roles;
        $data['economix_url'] = 'test';
        $data['homePage'] = 'homePage';
        $data['title'] = '';
        $data['description'] = '';
        return $data;
    }

    public function oneKind(Request $request)
    {
        $data = $this->userData($request);
        $data['productSummary'] = $this->oneKindSummary();
        $data['title'] = 'One of a Kind Products';
        $data['categories']  = $this->storeCategories();
        $data['description'] = 'From All the Stores';
        $data['productCategory'] = 0;
        return view('one_of_a_kind',$data);
    }
    public function onekindSub($productCategory,Request $request)
    {
        $data = $this->userData($request);
        $data['productSummary'] = $this->oneKindSummarySub($productCategory);
        $data['title'] = 'One of a Kind Products';
        $data['categories']  = $this->storeCategories();
        $data['description'] = 'From All the Stores';
        $data['productCategory'] = $productCategory;

        return view('one_of_a_kind',$data);
    }
    public function multiKind(Request $request)
    {
        $data = $this->userData($request);
        $data['productSummary'] = $this->multiKindSummary();
        $data['title'] = 'One of a Kind Products';
        $data['categories']  = $this->storeCategories();
        $data['description'] = 'From All the Stores';
        $data['productCategory'] = 0;
        return view('multi_of_a_kind',$data);
    }
    public function multikindSub($productCategory,Request $request)
    {
        $data = $this->userData($request);
        $data['productSummary'] = $this->multiKindSummarySub($productCategory);
        $data['title'] = 'One of a Kind Products';
        $data['categories']  = $this->storeCategories();
        $data['description'] = 'From All the Stores';
        $data['productCategory'] = $productCategory;

        return view('multi_of_a_kind',$data);
    }
    public function multiKindSummary()
    {
        $results = '';

        $products = Products::where('store_id','>',0)->orderBy('product_name')->get();
        $results = '<tr>';
        $ctr= 0;
        $modd=0;
        if(count($products)==0){
            $results .= "<td>No Products, Coming Soon</td>";
            $ctr = 8;
        }

        foreach($products as $product){
            $results .= "<td class='eighth'><a href=\"/multikind/$product->id\"><img src=\"/images\\$product->image\" width=\"135px;\"></a></td>";
            $results .= "<td class='fifth' ><a href=\"/multikind/$product->id\">";
            $description = "<b>".$product->product_name."</b><br>".$product->description."<br><b>".$product->display_description;
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

    public function multiKindSummarySub($productCategory)
    {
        $results = '';
        if ($productCategory > 0) {
            $products = Products::where('store_id','>',0)->where('product_category', $productCategory)->orderBy('product_name')->get();
        }
        else{
            $products = Products::where('store_id','>',0)->orderBy('product_name')->get();

        }
        $results = '<tr>';
        $ctr= 0;
        $modd=0;
        if(count($products)==0){
            $results .= "<td>No Products in Product Category, Coming Soon</td>";
            $ctr = 8;
        }

        foreach($products as $product){
            $results .= "<td class='eighth'><a href=\"/multikind/$product->id\"><img src=\"/images\\$product->image\" width=\"135px;\"></a></td>";
            $results .= "<td class='fifth' ><a href=\"/multikind/$product->id\">";
            $description = "<b>".$product->product_name."</b><br>".$product->description."<br><b>".$product->display_description;
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
    public function multikindproduct($productId, Request $request)
    {

        $product = Products::find($productId);
        $store = UserStores::find($product->store_id);
        $user = Users::find($store->user_id);
        $data = $this->userData($request);
        $data['store'] = $store;
        $data['user'] = $user;
        $data['ItemCount'] = $this->itemCount($request);
        $data['title'] = $store->product_name;
        $data['Product'] = $product;
        return view('store_product',$data);
    }
}