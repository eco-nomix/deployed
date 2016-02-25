<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\ShoppingCarts;
use App\Models\ShoppingCartItems;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $username = $request->session()->get('user_name');
        $userId = $request->session()->get('user_id');
        \Log::info("addto cart for $userId");
        $productId = $request->input('productId');
        $shoppingCart = $this->getShoppingCart($userId);
        \Log::info("shoppingcart = $shoppingCart->id");
        $itemCount = $shoppingCart->addToCart($userId,$productId);
        \Log::info("itemCount=$itemCount");
        return json_encode(['itemCount' =>$itemCount]);
    }

    public function getShoppingCart($userId)
    {
        $shoppingCart = ShoppingCarts::where('user_id',$userId)->first();
        if(!$shoppingCart){
            $shoppingCart = new ShoppingCarts;
            $shoppingCart->user_id = $userId;
            $shoppingCart->save();
        }
        return $shoppingCart;
    }

    public function viewCart(Request $request)
    {
        $data = $this->userData($request);
        $data = $this->loadShoppingCart($data['user_id'],$data);
        $data = $this->loadShipping($data['user_id'],$data);

        return view('shoppingcart',$data);
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
        return $data;
    }

    public function loadShoppingCart($userId,$data)
    {
        $result = "<tr><td></td><td colspan='2'  class='text-center'>item</td><td  class='text-center'>quantity</td><td  class='text-center'>Unit Price</td><td  class='text-center'>Ext. Price</td><td class='text-center'>Weight</td></tr>";
        \Log::info("userid=$userId");
        $userRoles = $data['userRoles'];
        $shoppingCart = ShoppingCarts::where('user_id',$userId)->first();
        $items = $this->getProducts($shoppingCart);
        $totalPrice = 0;
        $totalWeight = 0;
        $totalItems = 0;
        foreach($items as $item){
            $price = ($userRoles[1] == 'yes')?$item->member:$item->non_member;
            $extPrice = $price * $item->quantity;
            $disExtPrice = number_format($extPrice,2);
            $extWeight = $item->shipping_weight * $item->quantity;

            $result .= '<tr>';
            $result .=   "<td class='w70'><img src='/images/".$item->image."' width='70px'></td>";
            $result .=   "<td title='Enter 0 in quantity to remove item' colspan='2'><b>$item->product_name</b><br>$item->description<br>$item->Author</td>";
          //  $result .=   "<td>$item->quantity</td>";
            $result .=   "<td class='text-center'><input title='Enter 0 to remove item' class='quantity' type='text' data-id='$item->id' value='$item->quantity'></td>";
            $result .=   "<td class='text-center'>$price</td>";
            $result .=   "<td class='text-center'>$disExtPrice</td>";
            $result .=   "<td class='text-center'>$extWeight</td>";
            $result .=   "</tr>";
            $totalPrice += $extPrice;
            $totalWeight += $extWeight;
            $totalItems += $item->quantity;
        }
        $result .= "<tr>";
        $displayTotal = number_format($totalPrice,2);
        $result .= "<td>Total</td><td colspan='2'></td><td class='text-center'>$totalItems</td><td></td><td class='text-center'>$ $displayTotal</td><td class='text-center'>$totalWeight lbs</td>";
        $result .= "</tr>";
        $data['shoppingCart'] = $result;
        $data['totalPrice'] = $totalPrice;
        $data['totalWeight'] = $totalWeight;
        return $data;
    }

    public function getProducts($shoppingCart)
    {
        return ShoppingCartItems::select('shopping_cart_items.*','products.member','products.non_member','products.shipping_weight','products.image','products.product_name','products.description','products.Author')
            ->join('products','products.id','=','shopping_cart_items.product_id')
            ->where('shopping_cart_items.shopping_cart_id',$shoppingCart->id)
            ->get();
    }

    public function updateQuantity(Request $request)
    {
        $itemId = $request->input('itemId');
        $quantity = $request->input('quantity');
        \Log::info("itemId=$itemId  quantity=$quantity");
        if($quantity > 0) {
            $item = ShoppingCartItems::find($itemId);
            $item->quantity = $quantity;
            $item->save();
        }else{
            $item = ShoppingCartItems::find($itemId)->delete();
        }
        return json_encode('ok');
    }

    public function loadShipping($userId, $data)
    {
        $user = Users::find($userId);
        $results = "<tr>";
        $results .= "<td class='noBorder'>Shipping Address:</td>";
        $results .= "<td class='noBorder'><div class='inline'>";
        $results .= "$user->first_name $user->last_name<br>$user->addr1<br>";
        if($user->addr2>''){
            $results .= "$user->addr2<br>";
        }
        $results .= "$user->city, $user->state<br>$user->postal_code";
        $results .= "</div></td>";
        $results .= "<td class='noBorder'>Change Address</td>";
        $results .= "<td class='noBorder'>".$this->shippingMethod()."</td>";
        $results .= "<td class='text-center noBorder'>Shipping Amount:</td><td class='text-center noBorder'>$ 5.99</td><td class='noBorder'>&nbsp;</td>";

        $results  .=  "</tr>";
        $total = $data['totalPrice'] + 5.99;
        $results  .=  "<tr><td  class='noBorder'colspan='4'></td><td class='noBorder text-center'>Grand Total</td><td class='noBorder text-center'>$ $total</td><td  class='noBorder'>&nbsp;</td>";

        $data['shipping'] = $results;
        return $data;
    }


    public function shippingMethod()
    {
        $results = "<select>";
        $results .=    "<option value='upsground'>UPS Ground</option>";
        $results .=    "<option value='ups3day'>UPS 3 Day Select</option>";
        $results .=    "<option value='upsNextAir'>UPS Next Day Air</option>";
        $results .=    "<option value='FedEx'>FedEx</option>";
        $results .=    "<option value='USPS'>USPS</option>";
        $results .= "</select>";
        return $results;
    }

}