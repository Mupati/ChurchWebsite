<?php

namespace App\church;

use App\Model;


class Posts extends Model
{
    
	//means a post has comments
    public function comments(){
		return $this->hasMany(Comments::class,'posts_id');
    }
    //means that a comment belongs to a specific member
    public function member(){
		return $this->belongsTo(Membership::class,'memberships_id');
	}

	//adding a comment to a post
    public function addComment($body){
    	$this->comments()->create([
    				'body'=>$body,
    				'memberships_id'=>auth('membership')->id()
    		]);
	}


}
