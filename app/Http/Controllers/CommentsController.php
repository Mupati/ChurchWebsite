<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Blog;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Blog $post){

    	
        $this->validate(request(),[
            'body'=>'required'
            ]);

    $post->addComment(request('body'));
   
   	 return back();


	}
}