<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingTypes extends Model
{
    //
    protected $table = 'shipping_types';

    protected $primaryKey = 'id';

    public $timestamps = false;
}
