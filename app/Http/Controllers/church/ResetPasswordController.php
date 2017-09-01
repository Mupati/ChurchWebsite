<?php

namespace App\Http\Controllers\church;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;


class ResetPasswordController extends Controller
{
    //protected $redirectTo = '/index';

	public function redirectedTo()
	{
		return redirect('/index');
	}


    public function __construct()
    {
        $this->middleware('guest:membership');
    }


     public function showResetForm(Request $request, $token = null)
    {
        return view('church.forms.password.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }


     public function reset(Request $request)
    {
        $this->validate($request, $this->rules(), $this->validationErrorMessages());

        $response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );

        return $response == Password::PASSWORD_RESET
                    ? $this->sendResetResponse($response)
                    : $this->sendResetFailedResponse($request, $response);
    }


    protected function rules()
    {
        return [
            'token' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:6',
        ];
    }

      protected function validationErrorMessages()
    {
        return [];
    }


    protected function credentials(Request $request)
    {
        return $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );
    }

     protected function resetPassword($user, $password)
    {
        $user->forceFill([
            'password' => bcrypt($password),
            //'remember_token' => Str::random(60),
        ])->save();

        $this->guard()->login($user);
    }


     protected function sendResetResponse($response)
    {
        return redirect($this->redirectPath())
                            ->with('status', trans($response));
    }


    protected function sendResetFailedResponse(Request $request, $response)
    {
        return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => trans($response)]);
    }


    public function broker()
    {
        return Password::broker('memberships');
    }

    protected function guard()
    {
        return Auth::guard('membership');
    }




}
