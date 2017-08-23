<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\church\Membership;

class Image extends Model
{

    public function member()
    {
    	return $this->belongsTo(Membership::class);
    }
}
