<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\ProductGroups;
use App\Models\Products;
use App\Models\ShoppingCarts;
use App\Models\Roles;
use App\Models\UserRoles;
use App\Models\RegistrationStatus;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{




    //

    public function addProduct($productId, Request $request)
    {
        $data = $this->userData($request);
        return view('addProduct',$data);
    }
    public function config(Request $request)
    {
        $data = $this->userData($request);
        $data['selectNames'] = '';
        return view('configuration',$data);
    }

    public function configSearch(Request $request)
    {

        \Log::info("in search");
        $lastName = $request->input('last_name');
        \Log::info("lastname=$lastName");
        $users = Users::where('last_name','like',$lastName.'%')
            ->orWhere('first_name',$lastName)
            ->get();


        $result = "<option value=''>select User</option>";
        foreach($users as $user){
            $result .= "<option value='$user->id'>$user->first_name $user->last_name</option>";
        }

        $data = $this->userData($request);
        $data['selectNames'] = $result;
        $data['title'] = 'Admin';
        $data['description'] = 'Admin';
        return view('configuration',$data);
    }

    public function configUser($userId,Request $request)
    {
        $data = $this->userData($request);
        $editUser = Users::find($userId);
        \Log::info("inside configUser for $userId");
        $userRoles = UserRoles::where('user_id',$userId)->get();
        if($editUser) {
            $data['user_id'] = $userId;
            $data['first_name'] = $editUser->first_name;
            $data['last_name'] = $editUser->last_name;
            $roles = Roles::orderBy('id')->get();


            $result = "<option value=''>select Roles</option>";
            foreach ($roles as $role) {
                $selected = '';
                foreach ($userRoles as $userRole){
                    if ($role->id == $userRole->role_id){
                        $selected = 'selected';
                    }
                }
                $result .= "<option value='$role->id' $selected>$role->role_name</option>";
            }
            $data['MemberRoles'] = $result;
            $data['SponsorId'] = $editUser->sponsor_id;
            $data['title'] = 'Admin';
            $data['description'] = 'Admin';
            return view('configUser', $data);
        }else{
            $data['selectNames'] = '';
            $data['title'] = 'Admin';
            $data['description'] = 'Admin';
            return view('configuration',$data);
        }
    }

    public function updateConfigUser($userId,Request $request)
    {
      $memberRoles =   $request->input('member_roles');
        $newSponserId = $request->input('sponsor_id');
        $editUser = Users::find($userId);
        $editRoles = UserRoles::where('user_id',$userId)->delete();
        foreach($memberRoles as $memberRole){
            $userRole = new UserRoles;
            $userRole->user_id = $userId;
            $userRole->role_id = $memberRole;
            $userRole->region_id = 0;
            $userRole->save();
        }
        $sponsor = Users::find($newSponserId);
        \Log::info("updating $userId for sponsor $newSponserId");
        $editUser->sponsor_id = $sponsor->id;
        $editUser->second_id = $sponsor->sponsor_id;
        $editUser->third_id = $sponsor->second_id;
        $editUser->fourth_id = $sponsor->third_id;
        $editUser->fifth_id = $sponsor->fourth_id;
        $editUser->save();
        $this->updateDownStream($userId);
        $data = $this->userData($request);
        $data['selectNames'] = '';
        $data['title'] = 'Admin';
        $data['description'] = 'Admin';
        return view('configuration',$data);
    }

    public function updateDownStream($userId)
    {
        $editUser = Users::find($userId);
        $seconds = Users::where('sponsor_id',$userId)->get();
        foreach($seconds as $second){
            $second->second_id = $editUser->sponsor_id;
            $second->third_id = $editUser->second_id;
            $second->fourth_id = $editUser->third_id;
            $second->fifth_id = $editUser->fourth_id;
            $second->save();
            $this->updateDownStream($second->id);
        }
    }

    public function updateDownStream2($userId)
    {
        $editUser = Users::find($userId);
        $seconds = Users::where('sponsor_id',$userId)->get();
        foreach($seconds as $second){
            \Log::info("updating second=$second->id");
            $second->second_id = $editUser->sponsor_id;
            $second->third_id = $editUser->second_id;
            $second->fourth_id = $editUser->third_id;
            $second->fifth_id = $editUser->fourth_id;
            $second->save();
            $thirds = Users::where('sponsor_id',$second->id)->get();
            if(!$thirds) \Log::info("didn't find any thirds");
            foreach($thirds as $third){
                \Log::info("third=$third->id");
                $third->second_id = $second->sponsor_id;
                $third->third_id = $second->second_id;
                $third->fourth_id = $second->third_id;
                $third->fifth_id = $second->fourth_id;
                $third->save();
                $fourths = Users::where('sponsor_id',$third->id)->get();
                if(!$fourths) \Log::info("didn't find any fourths");
                foreach($fourths as $fourth){
                    \Log::info("fourth=$fourth->id");
                    $fourth->second_id = $third->sponsor_id;
                    $fourth->third_id = $third->second_id;
                    $fourth->fourth_id = $third->third_id;
                    $fourth->fifth_id = $third->fourth_id;
                    $fourth->save();
                    $fifths = Users::where('sponsor_id',$fourth->id)->get();
                    if(!$fifths) \Log::info("didn't find any fifths");
                    foreach($fifths as $fifth){
                        \Log::info("fifth=$fifth->id");
                        $fifth->second_id = $fourth->sponsor_id;
                        $fifth->third_id = $fourth->second_id;
                        $fifth->fourth_id = $fourth->third_id;
                        $fifth->fifth_id = $fourth->fourth_id;
                        $fifth->save();
                    }
                }
            }
        }
    }


    public function editUser($userId,Request $request)
    {
        $data = $this->userData($request);
        $editUser = Users::find($userId);
        if($editUser) {
            $data['user_id'] = $userId;
            $data['username'] = $editUser->user_name;
            $data['password'] = $editUser->password;
            $data['first_name'] = $editUser->first_name;
            $data['last_name'] = $editUser->last_name;
            $data['email'] = $editUser->email;
            $data['home_phone'] = $editUser->home_phone;
            $data['cell_phone'] = $editUser->cell_phone;
            $data['addr1'] = $editUser->addr1;
            $data['addr2'] = $editUser->addr2;
            $data['city'] = $editUser->city;
            $data['state'] = $editUser->state;
            $data['postal_code'] = $editUser->postal_code;
            $data['country'] = $editUser->country;
            $data['social_security'] = $editUser->social_security;
            $statuses = RegistrationStatus::orderBy('member_status')->get();


            $result = "<option value=''>select Status</option>";
            foreach ($statuses as $status) {
                if ($status->member_status == $editUser->member) {
                    $selected = "selected";
                } else {
                    $selected = '';
                }
                $result .= "<option value='$status->member_status' $selected>$status->description</option>";
            }
            $data['MemberStatus'] = $result;
            $data['title'] = 'Admin';
            $data['description'] = 'Admin';
            return view('editUser', $data);
        }else{
            $data['selectNames'] = '';
            $data['title'] = 'Admin';
            $data['description'] = 'Admin';
            return view('management',$data);
        }
    }

    public function updateUser($userId,Request $request)
    {

        if($request->input('Delete')){
            Users::find($userId)->delete();
        }else {
            $editUser = Users::find($userId);
            $editUser->user_name = $request->input('username');
            $editUser->password = $request->input('password');
            $editUser->first_name = $request->input('first_name');
            $editUser->last_name = $request->input('last_name');
            $editUser->email = $request->input('email');
            $editUser->home_phone = $request->input('home_phone');
            $editUser->cell_phone = $request->input('cell_phone');
            $editUser->addr1 = $request->input('addr1');
            $editUser->addr2 = $request->input('addr2');
            $editUser->city = $request->input('city');
            $editUser->state = $request->input('state');
            $editUser->postal_code = $request->input('postal_code');
            $editUser->country = $request->input('country');
            $editUser->social_security = $request->input('social_security');
            $editUser->member = $request->input('member_status');
            $editUser->save();
        }
        $data = $this->userData($request);
        $data['selectNames'] = '';
        $data['title'] = 'Admin';
        $data['description'] = 'Admin';
        return view('management',$data);
    }

    public function search(Request $request)
    {
        \Log::info("in search");
        $lastName = $request->input('last_name');
        \Log::info("lastname=$lastName");
        $users = Users::where('last_name','like',$lastName.'%')
                    ->orWhere('first_name',$lastName)
                    ->get();


        $result = "<option value=''>select User</option>";
        foreach($users as $user){
            $result .= "<option value='$user->id'>$user->first_name $user->last_name</option>";
        }

        $data = $this->userData($request);
        $data['selectNames'] = $result;
        $data['title'] = 'Admin';
        $data['description'] = 'Admin';
        return view('management',$data);
    }

    public function management(Request $request)
    {
        $data = $this->userData($request);
        $data['selectNames'] = '';
        $data['title'] = 'Admin';
        $data['description'] = 'Admin';
        return view('management',$data);
    }

    public function userData($request)
    {


        $ecosponsor    = $request->cookie('ecosponsor');
        $data['ecosponsor'] = $ecosponsor;
        \Log::info("ecosponsor = $ecosponsor");
        $data['user_name'] =$request->session()->get('user_name');
        $data['username'] =$request->session()->get('username');
        $username = $request->session()->get('user_name');
        $roles = $request->session()->get('userRoles');
        \Log::info("username = $username");
        $data['user_id'] =$request->session()->get('user_id');

        $user = Users::find($data['user_id'] );
        if($user){
            $referralLink = "http://eco-nomix.org/referred/$user->id";
        }else{
            $referralLink = "Not Logged in";
        }
        $data['referral_link'] = $referralLink;
        $data['errors'] = [];
        $data['userRoles'] = $roles;
        $data['economix_url'] = 'test';
        $data['homePage'] = 'homePage';
        $data['title'] = 'Admin';
        $data['description'] = 'Admin';
        return $data;
    }
    public function productsStart(Request $request)
    {
          return $this->productList(0,0,$request);
    }

    public function productList($productGroup, $subGroup,$request)
    {
        $data = $this->userData($request);
        $data['ProductGroups'] = $this->productGroups($productGroup);
        $data['ProductSubgroups'] = $this->productSubgroups($productGroup,$subGroup);
        $data['title'] = 'Admin';
        $data['description'] = 'Admin';
        return view('books',$data);
    }
    public function products(Request $request)
    {
        $data = $this->userData($request);
        $productGroup = $request->input('ProductGroupList')?:1;
        $data['ProductGroups'] = $this->productGroups($productGroup);
        $subGroup = $request->input('SubGroupList')?:9;
        $data['ProductSubgroups'] = $this->productSubgroups($productGroup,$subGroup);
        $data['title'] = 'Admin';
        $data['description'] = 'Admin';
        return view('books',$data);
    }

    public function productGroups($selected)
    {
        $productGroups= ProductGroups::where('Parent_id',$productGroup)->orderBy('group_order')->lists('name','id');
        $select = $this->groupSelect($productGroups,$selected);
        return $select;
    }

    public function productSubgroups($productGroup, $selected)
    {
        $productGroups= ProductGroups::where('Parent_id',$productGroup)->orderBy('group_order')->lists('name','id');
        $select = $this->prepareSelect($productGroups, $selected);
        return $select;
    }
    public function groupSelect($productGroups, $selected)
    {
        $results = "<select name='ProductGroupList' style='width:300px;' onchange='this.form.submit()' > ";
        $selectField = ($selected == 0)?'selected':'';
        foreach($productGroups as $id=>$productGroup){
            $selectField = ($id == $selected)?'selected':'';
            $results .= "<option value ='".$id."' $selectField>$productGroup</option>";
        }
        $results .="</select>";
        return $results;
    }

    public function prepareSelect($productGroups, $selected)
    {
        $results = "<select name='SubGroupList' style='width:300px;' onchange='this.form.submit()' > ";
        $selectField = ($selected == 0)?'selected':'';
        $results .= "<option value = '99999' $selectField>New SubGroup</option>";

        foreach($productGroups as $id=>$productGroup){
            $selectField = ($id == $selected)?'selected':'';
            $results .= "<option value ='".$id."' $selectField>$productGroup</option>";
        }
        $results .="</select>";
        return $results;
    }


}
