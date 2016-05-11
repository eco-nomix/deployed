<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WithdrawalReasons extends Model
{
    //
    protected $table = 'withdrawal_reasons';

    protected $primaryKey = 'id';

    public $timestamps = false;
}
