<?php

namespace App\Http\Controllers\church\profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\church\Posts;
use App\church\Comments;
use Illuminate\Support\Facades\Storage;
use Auth;

class PostController extends Controller
{
   
    public function __construct() 
        {
        $this->middleware('auth:membership');
        }

    public function index()
     {  
        $posts = Posts::latest()->get();
        return view('church/profile.blog',compact('posts'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {   //store blog post in db.        
        $this->validate(request(),[
            'title'=>'required',
            'title' => array('Regex:/^[A-Za-z0-9 ]+$/'),
            'body'=>'required',
            ]);
        Posts::create([
            'title'=>request('title'),
            'body'=>request('body'),
            'memberships_id'=> auth('membership')->id()
            ]);

        return redirect('/profile/blog');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
