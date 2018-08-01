<?php

namespace Inicia\Http\Controllers\Auth;

use Inicia\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Hash;
use Inicia\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * credentials
     *
     * @return Validación de credenciales del Usuario
     */
    protected function credentials(Request $request)
    {
        return ['email' => $request->email, 'password' => $request->password, 'confirmed' => 1]; 
    }

    /**
     * sendFailedLoginResponse
     *
     * @return Validación de Email y Contraseña
     *
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        
        if ($user) {
            $password = Hash::check($request->password, $user->password);
            
            if (!$password) {
                $errors = [$this->username() => trans('auth.invalid')];
            }
            
            if ($user && $user->confirmed != 1) {
                $errors = [$this->username() => trans('auth.confirmed')];
            }
        }

        if (is_null($user)) {
            $errors = [$this->username() => trans('auth.failed')];
        }

        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors($errors);
    }
}
