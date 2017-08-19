<?php

namespace App\Http\Controllers\church\profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\church\Comments;
use App\church\Posts;
use App\church\Membership;


class CommentsController extends Controller
{


	public function store(Request $request)
	{
		 $this->validate(request(),[
            'body'=>'required'
            ]);
//find another way to go about this
		 $comment = new Comments;
		 $comment->body = $request->body;
		 $comment->memberships_id = auth('membership')->id();
		 $comment->posts_id = $request->posts_id;
		 $comment->save();

		 return back();
	}



	/*
    public function store(Posts $post)
    {
    	  $this->validate(request(),[
            'body'=>'required'
            ]);

    	 $post->addComment(request('body'));

    	 return back();
    }
    */
}
