<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $table = 'users';

    protected $fillable = ['first_name', 'last_name', 'email', 'password','home_phone','work_phone','cell_phone', 'can_receive_text_message','addr1','addr2','city','state','country_id','postal_code','user_name','social_security','user_link'];
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $hidden = ['password','remember_token'];

    public function checkForRegistration(Request $request)
    {
        return Users::where('email',$request->input('email'))
            ->first();
    }
    public function checkForUserName(Request $request)
    {
        return Users::where('user_name',$request->input('username'))
            ->first();
    }

}
