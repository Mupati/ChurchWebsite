<?php

namespace App\Http\Controllers\church;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;


class ProfileController extends Controller
{
 
	public function __construct() 
		{
    	$this->middleware('auth:membership');
       }

    public function index()
    {
        $image = Image::all();
    	return view('church/profile.index',compact('image'));
    }

/*
    public function blog()
    {
    	return view('church/profile.blog');
    }
*/

    public function forum()
    {
    	return view('church/profile.blog');
    }


    public function store()
    {
    	return view('church/profile.blog');
    }
    


    
}
