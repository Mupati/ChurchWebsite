<?php

namespace App\church;

use App\Model;


class Posts extends Model
{
    

    public function comments(){
		return $this->hasMany(Comments::class);
    }

    public function member(){
		return $this->belongsTo(Membership::class);
	}


    public function addComment($body){
    	$this->comments()->create(['body'=>$body]);
	}


}
