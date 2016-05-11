<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingAddresses extends Model
{
    //
    protected $table = 'shipping_addresses';

    protected $primaryKey = 'id';

    public $timestamps = false;
}
