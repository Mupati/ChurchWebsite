<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
    	
    	return View('posts.index');

    }



    public function create(){

    	return View('posts.create');
    }
}
