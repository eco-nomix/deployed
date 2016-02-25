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
        $itemCount = $shoppingCart->addToCart($userId,$productId);
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
        $data['shoppingCart'] = $this->loadShoppingCart($data['user_id'],$data);
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
        $result = '<tr><td></td><td>item</td><td>quantity</td><td>Unit Price</td><td>Ext. Price</td><td>Weight</td></tr>';
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
            $extWeight = $item->shipping_weight * $item->quantity;

            $result .= '<tr>';
            $result .=   "<td class='w70'><img src='/images/".$item->image."' width='70px'></td>";
            $result .=   "<td>$item->product_name</td>";
            $result .=   "<td>$item->quantity</td>";
            $result .=   "<td>$price</td>";
            $result .=   "<td>$extPrice</td>";
            $result .=   "<td>$extWeight</td>";
            $result .=   "</tr>";
            $totalPrice += $extPrice;
            $totalWeight += $extWeight;
            $totalItems += $item->quantity;
        }
        $result .= "<tr>";
        $result .= "<td>Total</td><td></td><td>$totalItems</td><td></td><td>$ $totalPrice</td><td>$totalWeight lbs</td>";
        $result .= "</tr>";
        return $result;
    }

    public function getProducts($shoppingCart)
    {
        return ShoppingCartItems::query()
            ->join('products','products.id','=','shopping_cart_items.product_id')
            ->where('shopping_cart_items.shopping_cart_id',$shoppingCart->id)
            ->get();
    }

}