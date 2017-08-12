<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Comment;

class OtkController extends Controller
{   



    public function index(){
    	return View('otk.index');
    }

    //view blog page
    public function blog(){

    	$posts = Blog::latest()->get();
    	return View('otk.blog', compact('posts'));
    }

    //store blog posts in db.
    public function store_post(){

    	$this->validate(request(),[
    		'category'=>'required',
    		'title'=>'required',
    		'body'=>'required'
    		]);

    	$post = new Blog;

    	$post->category = request('category');
    	$post->title = request('title');
    	$post->body= request('body');

    	$post->save();

    	return redirect('/blog');
    }
/* not using this for now
    public function store_comment(){

        $this->validate(request(),[
            'body'=>'required'
            ]);

        $comment = new Comment;
        $comment->post_id = request('post_id');
        $comment->body = request('body');

        $comment->save();

        return redirect('/blog');
    } 

*/
    //get and view each post by it's id
    public function show(Blog $post){

    	return View('otk.show', compact('post'));
    }
}
