<?php

namespace App\Http\Controllers\church;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\church\Membership;


class LoginController extends Controller
{

   public function login(Request $request){

   	$this->validation($request);
   	
      if(Auth::guard('membership')->attempt(['username'=>$request->username,'password'=>$request->pwd])){

      //$members = Membership::all();
  		
      return $this->redirect(); //->with(compact('members'));
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

   protected function redirect(){

   	return view('church/profile.profile');
   }

   public function logout(Request $request)
    {
        #Auth::guard('membership')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/index');
    }


}


