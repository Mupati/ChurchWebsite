<?php

namespace App\church;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;


class Membership extends Authenticatable
{   
	
	use Notifiable;    

    public function posts()
    {
    	return $this->hasMany(Posts::class,'memberships_id');
    }

    public function comments()
    {
    	return $this->hasMany(Comments::class,'memberships_id');

    }

    public function sendPasswordResetNotification($token)
		{
    		$this->notify(new ResetPasswordNotification($token));
		}

}
