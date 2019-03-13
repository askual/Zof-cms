<?php

namespace Modules\Client\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Routing\Controller;

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
    protected $redirectTo = '/client';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest:clients')->except(['logout','logout2']);
    }
    public function logout2(Request $request){
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('client.login');
    }
    public function client_login_page(){
        // return "22";
        return view('client::client.login');
    }
    public function client_login_submit(Request $request){
        if(Auth::guard('clients')->attempt(['username'=> $request->username , 'password' => $request->password], $request->remember)){
            return redirect()->intended(route('client.index'));
        }
        return redirect()->back()->withInput($request->only('email'));
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}