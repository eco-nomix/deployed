public $timestamps = false;<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyPurchases extends Model
{
    //
    protected $table = 'company_purchases';

    protected $primaryKey = 'id';

    public $timestamps = false;
}
