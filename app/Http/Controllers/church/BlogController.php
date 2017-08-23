<?php

namespace App\Http\Controllers\church;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\church\Posts;


class BlogController extends Controller
{
    public function index()
    {   
        $posts = Posts::latest()->get();
    	return view('church/blog.index',compact('posts'));
    }


    public function hymns()
    {
    	return view('church/blog.index');
    }



    public function bio()
    {
    	return view('church/blog.index');
    }


    public function testimonies()
    {
    	return view('church/blog.index');
    }


}
