<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bonuses extends Model
{
    //
    protected $table = 'bonuses';

    protected $primaryKey = 'id';

    protected $fillable = [
        'purchaser_id','transaction_id','transaction_details_id','payee_user_id','amount','level'
    ];
}
