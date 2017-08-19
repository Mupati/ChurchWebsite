<?php

namespace App\Http\Controllers\church;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\church\Membership;


class ProfileController extends Controller
{
 
	public function __construct() 
		{
    	$this->middleware('auth:membership');
       }

    public function index()
    {
    	return view('church/profile.index');
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
