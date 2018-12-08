<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingCarts extends Model
{
    //
    protected $table = 'shopping_carts';

    protected $primaryKey = 'id';
    public $timestamps = false;
    public function addToCart($userId, $productId)
    {
        $item = ShoppingCartItems::where('shopping_cart_id', $this->id)
            ->where('product_id',$productId)->first();
        if(!$item){
            $item = new ShoppingCartItems;
            $item->shopping_cart_id = $this->id;
            $item->product_id = $productId;
            $item->quantity = 1;
            $item->save();
        }
        return $this->getItemCount($userId);
    }

    public function getItemCount($userId)
    {
        $cartId= ShoppingCarts::where('user_id',$userId)->first();
        if(!$cartId){
            return 0;
        }
        return ShoppingCartItems::where('shopping_cart_id',$cartId->id)
            ->where('quantity','>',0)->count();
    }
}
