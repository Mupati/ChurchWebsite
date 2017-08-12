<?php

namespace App\Http\Controllers\church;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
 



    public function index()
    {
    	return view('church/profile.profile');
    }


}
