<?php

namespace App\Http\Controllers\church;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\church\Membership;


class LoginController extends Controller
{ 


     public function __construct()
        {
          $this->middleware('guest:membership')->except('logout');
        }


   public function login(Request $request){

   	$this->validation($request);
   	
      if(Auth::guard('membership')->attempt(['username'=>$request->username,'password'=>$request->pwd])){
      return redirect('/profile'); 
   	       }
          	return back();
  }

   public function validation($request)
   {
   	return $this->validate($request,[
        'username'=>'required',
        'pwd'=>'required'
        ]);
   }

   public function logout(Request $request)
    {
        Auth::guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/index');
    }


}


