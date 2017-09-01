<?php

namespace App\Http\Controllers\church;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\church\Membership;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
 
	public function __construct() 
		{
    	$this->middleware('auth:membership');
       }

    public function index()
    {
        $user = Auth::user();
        $url = Storage::url($user->avatar);
        return view('church/profile.index',compact('user','url'));
    }

    public function update_avatar(Request $request)
    {
        $this->validation($request);

        $member = Membership::all();
        $request->file('avatar');
        $ext = $request->avatar->extension();
        $path = $request->avatar->storeAs('public',time().".".$ext); 
        
        foreach ($member as $member) {
            $member->avatar = $path;
        }
        $member->save();

        return back();
    
    }
    

    public function validation($request) {
        return $this->validate($request,[
                    'avatar'=>'mimes:jpeg,png|required',
           ]);      
    }


     public function forum()
        {
     	  return view('church/profile.blog');
        }

     public function store()
        {
    	   return view('church/profile.blog');
        }


    


    
}
