<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Requests;
use App\Models\Boutiques;
use App\Models\Products;
use App\Models\ShippingTypes;
use App\Models\ShoppingCarts;
use App\Http\Controllers\Controller;

class BoutiqueController extends Controller
{
    public function boutique($boutiqueId, Request $request)
    {
        $boutique = Boutiques::find($boutiqueId);
        $user = Users::find($boutique->user_id);
        $data = $this->userData($request);
        $data['boutique'] = $boutique;
        $data['user'] = $user;
        $data['productSummary'] = $this->boutiqueSummary($boutiqueId);
        $data['title'] = $boutique->name;
        $data['owner'] = $boutique->owner_description;
        $data['description'] = 'Member Boutiques';

        return view('boutique',$data);
    }
    public function boutiqueSummary($boutiqueId)
    {
        $results = '';

        $products = Products::where('boutique_id',$boutiqueId)->orderBy('product_name')->get();
        $results = '<tr>';
        $ctr= 0;
        $modd=0;
        if(count($products)==0){
            $results .= "<td>No Products in this Boutique, Coming Soon</td>";
            $ctr = 8;
        }

        foreach($products as $product){
            $results .= "<td class='eighth'><a href=\"$boutiqueId/product/$product->id\"><img src=\"/images\\$product->image\" width=\"135px;\"></a></td>";
            $results .= "<td class='fifth' ><a href=\"$boutiqueId/product/$product->id\">";
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
    public function displayproduct($boutiqueId, $productId, Request $request)
{
    $boutique = Boutiques::find($boutiqueId);
    $product = Products::find($productId);
    $user = Users::find($boutique->user_id);
    $data = $this->userData($request);
    $data['boutique'] = $boutique;
    $data['user'] = $user;
    $data['ItemCount'] = $this->itemCount($request);
    $data['title'] = $boutique->product_name;
    $data['Product'] = $product;
    return view('boutique_product',$data);
}
    public function onekindproduct($productId, Request $request)
    {

        $product = Products::find($productId);
        $boutique = Boutiques::find($product->boutique_id);
        $user = Users::find($boutique->user_id);
        $data = $this->userData($request);
        $data['boutique'] = $boutique;
        $data['user'] = $user;
        $data['ItemCount'] = $this->itemCount($request);
        $data['title'] = $boutique->product_name;
        $data['Product'] = $product;
        return view('boutique_product',$data);
    }
    public function saveeditproduct($boutiqueId, $productId, Request $request)
    {
        $boutique = Boutiques::find($boutiqueId);
        $product = Products::find($productId);
        $user = Users::find($boutique->user_id);
        $image = $this->addImage($user->id, $request, $boutique->id);
        if($image > '') {
            $product->image = $image;
        }
        $product->product_name = $request->input('product_name');
        $product->description = $request->input('description');
        $product->retail = $request->input('retail');
        $product->non_member = $request->input('retail');
        $product->member = $request->input('retail');
        $product->shipping_weight = $request->input('shipping_weight');
        $product->cost_shipping = $request->input('cost_shipping');
        $product->display_description = $request->input('display_description');
        $product->physical_description = $request->input('physical_description');
        $product->one_of_a_kind = $request->input('one_of_a_kind');
        $product->save();
        $data = $this->userData($request);
        $data['boutique'] = $boutique;
        $data['Product'] = $product;
        $data['user'] = $user;
        $data['name']=$boutique->name;
        $data['logo'] = $boutique->logo;

        return view('boutique_edit_product',$data);
    }
    public function editproduct($boutiqueId, $productId, Request $request)
    {

        $boutique = Boutiques::find($boutiqueId);
        $product = Products::find($productId);
        $user = Users::find($boutique->user_id);
        $data = $this->userData($request);
        $data['boutique'] = $boutique;
        $data['Product'] = $product;
        $data['user'] = $user;
        $data['name']=$boutique->name;
        $data['logo'] = $boutique->logo;

        return view('boutique_edit_product',$data);
    }

    public function addboutique($userId,Request $request)
    {

        $user = Users::find($userId);
        $boutiques = Boutiques::where('user_id',$userId)->orderBy('name')->lists('name','id');
        $data = $this->userData($request);
        $data['boutiques'] = $boutiques;
        $data['shippingTypes'] = $this->shipping();
        $data['title'] = 'Add New Boutique';
        $data['description'] = 'Add New Boutique';
        return view('boutique_add',$data);
    }

    public function saveboutique($userId, Request $request)
    {

        $boutique = Boutiques::create(['name'=>$request->input('name'),
            'gen_description'=>$request->input('gen_description'),
            'user_id'=>$userId,
            'detailed_description'=>$request->input('detailed_description'),
            'allow_custom_requests'=>$request->input('allow_custom_requests'),
            'shipping_id'=>$request->input('shipping_id'),
            'owner_description' => $request->input('owner_description'),
            'handling_charge'=>$request->input('handling')]);

        $name = $this->addImage($userId, $request, $boutique->id);
        $boutique->logo = $name;
        $boutique->save();
        return $this->addboutique($userId,$request);
    }

    public function editboutique($boutiqueId,Request $request)
    {
        $boutique = Boutiques::find($boutiqueId);
        $user = Users::find($boutique->user_id);
        $boutiques = Boutiques::where('user_id',$user->id)->orderBy('name')->lists('name','id');
        $data = $this->userData($request);

        $data['boutiques'] = $boutiques;
        $data['shippingTypes'] = $this->shipping();
        $data['title'] = 'Add New Boutique';
        $data['description'] = 'Add New Boutique';
        $data['name']=$boutique->name;
        $data['gen_description'] = $boutique->gen_description;
        $data['logo'] = $boutique->logo;
        $data['id'] = $boutique->id;
        $data['detailed_description'] = $boutique->detailed_description;
        $data['shipping_id'] = $boutique->shipping_id;
        $data['owner_description'] = $boutique->owner_description;
        $data['allow_custom_requests'] = $boutique->allow_custom_requests;
        $data['handling_charge'] = $boutique->handling_charge;
        return view('boutique_edit',$data);

    }

    public function saveeditboutique($boutiqueId,Request $request)
    {

        $addProducts = $request->input('addProducts');
        \Log::info("addProducts = $addProducts");
        $boutique = Boutiques::find($boutiqueId);
        $user = Users::find($boutique->user_id);
        $logo = $this->addImage($user->id, $request, $boutique->id);
        if($logo > '') {
            $boutique->logo = $logo;
        }
        if($request->input('name')> '') {
            $boutique->name = $request->input('name');
        }
        if ($request->input('gen_description')> '') {
            $boutique->gen_description = $request->input('gen_description');
        }
        if ($request->input('detailed_description')>'') {
            $boutique->detailed_description = $request->input('detailed_description');
        }
        if ($request->input('owner_description')>'') {
            $boutique->owner_description = $request->input('owner_description');
        }
        $boutique->allow_custom_requests = $request->input('allow_custom_requests');
        $boutique->shipping_id = $request->input('shipping_id');
        $boutique->handling_charge = $request->input('handling');
        $boutique->save();
        if ($addProducts) {
            return $this->addProducts($boutiqueId, $request);
        }
        $boutiques = Boutiques::where('user_id',$user->id)->orderBy('name')->lists('name','id');
        $data = $this->userData($request);
        $data['boutiques'] = $boutiques;
        $data['shippingTypes'] = $this->shipping();
        $data['title'] = 'Add New Boutique';
        $data['description'] = 'Add New Boutique';
        $data['name']=$boutique->name;
        $data['gen_description'] = $boutique->gen_description;
        $data['logo'] = $boutique->logo;
        $data['id'] = $boutique->id;
        $data['detailed_description'] = $boutique->detailed_description;
        $data['owner_description'] = $boutique->owner_description;
        $data['shipping_id'] = $boutique->shipping_id;
        $data['allow_custom_requests'] = $boutique->allow_custom_requests;
        $data['handling_charge'] = $boutique->handling_charge;

        return view('boutique_edit',$data);

    }
    public function itemCount(Request $request)
    {
        $userId = $request->session()->get('user_id');
        $shoppingCart = new ShoppingCarts;
        return $shoppingCart->getItemCount($userId);
    }
    public function addProduct($boutiqueId,Request $request)
    {
        $boutique = Boutiques::find($boutiqueId);
        $user = Users::find($boutique->user_id);
        $picture = $this->addProductImage($request, $boutique->id);
        $product = new Products;
        $product->product_name = $request->input('product_name');
        $product->description = $request->input('description');
        $product->display_description = $request->input('display_description');
        $product->Author = $boutique->name;
        $product->retail = $request->input('retail');
        $product->non_member = $request->input('retail');
        $product->shipping_weight = $request->input('shipping_weight');
        $product->member = $request->input('retail');
        $product->cost_shipping = $request->input('cost_shipping');
        $product->pay_bonus = 1;

        if($picture > '') {
            $product->image = $picture;
        }
        $product->physical_description = $request->input('physical_description');
        $product->boutique_id = $boutique->id;
        $product->one_of_a_kind = $request->input('one_of_a_kind');
        $product->save();
        $picture = $this->addProductImage($request, $product->id);
        if($picture > '') {
            $product->image = $picture;
            $product->save();
        }
        return redirect("boutique/$boutique->id");
    }

    Public function deleteProduct($boutiqueId,$productId, Request $request)
    {
        $product = Products::find($productId)->delete();
        return redirect("boutique/$boutiqueId");
    }

    Public function addProducts($boutiqueId, Request $request)
    {
        $boutique = Boutiques::find($boutiqueId);
        $user = Users::find($boutique->user_id);
        $data = $this->userData($request);
        $data['boutique'] = $boutique;
        $data['user'] = $user;
        $data['name']=$boutique->name;
        $data['logo'] = $boutique->logo;
        $data['products'] = $this->boutiqueProducts($boutiqueId);
        return view('boutique_products',$data);

    }

    public function addProductImage(Request $request, $boutiqueId)
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
        $name = 'botique_product_'.$boutiqueId.$extension;
        $file->move($destination, $name);
        return $name;
    }

    public function addImage($userId, Request $request,$boutiqueId)
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
        $name = 'botique_logo_'.$boutiqueId.$extension;
        $file->move($destination, $name);

       return $name;
    }

    public function shipping()
    {
        return ShippingTypes::orderBy('description')->lists('description','id');
    }

    public function boutiqueProducts($boutiqueId)
    {
        return Products::where('boutique_id',$boutiqueId)->orderBy('product_name')->get();

    }

    public function addbotiqueproduct($boutiqueId)
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
        $data['description'] = 'From All the Boutiques';

        return view('one_of_a_kind',$data);
    }

}