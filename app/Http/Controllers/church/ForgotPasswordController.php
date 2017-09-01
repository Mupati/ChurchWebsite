<?php

namespace App\Http\Controllers\church;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
   
     public function __construct()
  	  {
        $this->middleware('guest:membership');
   	 }

	public function showLinkRequestForm()
    {
        return view('church.forms.password.email');
    }

     public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);
            $response = $this->broker()->sendResetLink(
         $request->only('email')
        );

        return $response == Password::RESET_LINK_SENT
                    ? $this->sendResetLinkResponse($response)
                    : $this->sendResetLinkFailedResponse($request, $response);
    }



     protected function validateEmail(Request $request)
    	{
       		 $this->validate($request, ['email' => 'required']);
    	}

    protected function sendResetLinkResponse($response)
    {
        return back()->with('status', trans($response));
    }

    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        return back()->withErrors(
            ['email' => trans($response)]
        );
    }

    public function broker()
    {
        return Password::broker('memberships');
    }






}
