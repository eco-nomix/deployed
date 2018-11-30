<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class TempUsers extends Model
{
    //
    protected $table = 'temp_users';

    protected $fillable = ['first_name', 'last_name', 'email', 'password','addr1','addr2','city','state','country','postal_code','user_name'];
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $hidden = ['password'];
}
