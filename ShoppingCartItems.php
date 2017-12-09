<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingCartItems extends Model
{
    //
    protected $table = 'shopping_cart_items';

    protected $primaryKey = 'id';

    public $timestamps = false;

    public function product(){
    	return $this->belongsTo(Products::class);
    }
}
