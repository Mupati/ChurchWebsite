<?php

namespace App\Http\Controllers\church;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\church\Membership;

class RegistrationController extends Controller
{

    public function sign_up()
    {
      return view('church/forms.register');
    }


    public function add_member(Request $request)
    {
      
      $this->validation($request);
      
      $member = new Membership;
      $member->name = request('name');
      $member->username = request('uname');
      $member->phone_number= request('phone');
      $member->email= request('email');
      $member->password = bcrypt(request('password'));

      $member->save();

      return $this->redirect();
    }



    public function validation($request)
    {
      return $this->validate($request,[
        'name'=>'unique:memberships,name|required|string|max:255',
        'uname'=>'unique:memberships,username|required|nullable',
        'phone'=>'unique:memberships,phone_number|required',
        'email'=>'unique:memberships,email|nullable',
        'password'=>'required|string|min:6|confirmed'
        ]);

    }

     protected function redirect(){
        return view('church/profile.profile');
   }

}
