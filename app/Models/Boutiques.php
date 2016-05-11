<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boutiques extends Model
{
    //
    protected $table = 'boutiques';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'gen_description', 'logo', 'user_id','detailed_description','owner_description','shipping_id','allow_custom_requests','handling_charge'];

    public $timestamps = false;

}
