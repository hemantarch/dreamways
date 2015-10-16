<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Socialite;
use App\Http\Controllers\Auth\AuthenticateUser;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Session;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    protected $redirectPath = '/dashboard';

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function getRegister()
    {
     return view('auth.register');   
    }


    public function getLogin()
    {
        return view('auth.login');
    }

// AuthController.php
    public function social_login(AuthenticateUser $authenticateUser, Request $request, $provider = null) 
    {
       return $authenticateUser->execute($request->all(), $this, $provider);
    }



    public function getReset($token = null)
    {
        if (is_null($token)) App::abort(404);

        return View::make('password.reset')->with('token', $token);
    }



    public function userHasLoggedIn($user) {
    
    Session::flash('message', 'Welcome, ' . $user->username);
    if($user->role)
        return redirect('admin/dashboard');
    else
        return redirect('/dashboard');
    }




    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => 0,
            'provider' => "0",
            'provider_id' => "0"
        ]);
    }
}
