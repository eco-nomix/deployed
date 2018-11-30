<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class UserStores extends Model
{
    //
    protected $table = 'user_stores';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'gen_description', 'logo', 'user_id','detailed_description','owner_description','shipping_id','allow_custom_requests','handling_charge', 'product_group', 'store_type'];

    public $timestamps = false;
}
