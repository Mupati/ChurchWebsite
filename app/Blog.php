<?php

namespace App;


class Blog extends Model
{
    
    public function comments(){

    	return $this->hasMany(Comment::class,'post_id');
    }

    public function user(){
		return $this->belongsTo(User::class);
	}


    public function addComment($body){
    	$this->comments()->create(['body'=>$body]);

    }
    
}
