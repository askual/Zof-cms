<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['logout','admin_login_page']);
    }

    public function admin_login_page(){
        return view('admin.login');
    }

    public function admin_login_submit(Request $request){
        if(Auth::guard('web')->attempt(['email'=> 'admin@alenethiopia.org' , 'password' => $request->password], $request->remember)){
            return redirect()->intended(route('admin.index'));
        }
        return redirect()->back()->withInput($request->only('email'));
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
