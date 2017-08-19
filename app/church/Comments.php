<?php

namespace App\church;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model

{

	protected $fillable = ['body'];	
    //means that a comment belongs to a post
    public function posts()
    {
    	return $this->belongsTo(Posts::class);
    }

    public function member()
    {
    	return $this->belongsTo(Membership::class);
    }




}
