<?php

namespace App\church;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Image;

class Membership extends Authenticatable
{
  
/*
  protected $fillable = [
        'name', 'username','phone_number','email','password',
    ];


      protected $hidden = [
        'password', '_token',
    ];
 
*/
    public function posts()
    {
    	return $this->hasMany(Posts::class);
    }

    public function comments()
    {
    	return $this->hasMany(Comments::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }



}
