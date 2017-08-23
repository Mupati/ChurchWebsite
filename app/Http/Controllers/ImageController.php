<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{


	public function __construct()
	{
		$this->middleware('auth:membership');
	}



    public function store(Request $request)
    {
    	$new = new Image;
    	$new->name = request('name');
    	$new->memberships_id = auth('membership')->id();
    	$path = $request->file('image')->store('avatars'); 
    	$new->image = $path;
    	$new->save();


    	return "image recieved";
    }
}
