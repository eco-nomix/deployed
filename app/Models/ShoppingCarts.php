<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingCarts extends Model
{
    //
    protected $table = 'shopping_carts';
    protected $fillable = ['user_id', 'shipping_address_id', 'temp_user_id'];

    protected $primaryKey = 'id';
    public $timestamps = false;
    public function addToCart($productId, $shoppingCart)
    {
        \Log::info("in Add to Cart  productId=$productId  ShoppingCarts");
        $item = ShoppingCartItems::where('shopping_cart_id', $shoppingCart->id)
            ->where('product_id',$productId)->first();
        if(!$item){
            $item = new ShoppingCartItems;
            $item->shopping_cart_id = $shoppingCart->id;
            $item->product_id = $productId;
            $item->quantity = 1;
            $item->save();
        }
        return $this->getItemCount($shoppingCart);
    }

    public function getShoppingCart($userId, $tempId)
    {
        $shoppingCart = null;
        \Log::info("in getShoppingCart in ShoppingCarts. userId=$userId  tempId=$tempId");
        if($userId) {
            $shoppingCart = ShoppingCarts::where('user_id', $userId)->first();
        }
        if(!$shoppingCart){
            $shoppingCart = ShoppingCarts::where('temp_user_id', $tempId)->first();
        }
        if (!$shoppingCart) {
            $shoppingCart = new ShoppingCarts;
            $shoppingCart->user_id = $userId;
            $shoppingCart->temp_user_id = $tempId;
            $shoppingCart->save();
            \Log::info("new Cart created");
        }
        \Log::info("shoppingCart = $shoppingCart->id");
        return $shoppingCart;
    }

    public function getItemCount($shoppingCart)
    {
        $cartId = $shoppingCart->id;
         if(!$cartId){
            return 0;
        }
        \Log::info("itemcount for cartId =$cartId");
        return ShoppingCartItems::where('shopping_cart_id',$cartId)->count();
    }
}
