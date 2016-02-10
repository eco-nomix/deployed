<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $table = 'users';

    protected $fillable = ['first_name', 'last_name', 'email', 'password','home_phone','work_phone','cell_phone', 'can_receive_text_message','addr1','addr2','city','state','country_id','postal_code','user_name','social_security','user_link'];

    protected $primaryKey = 'id';

    protected $hidden = ['password','remember_token'];


}
