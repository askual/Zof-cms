<?php

namespace Modules\Accounts\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Socialite;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class SocialAccountController extends Controller
{
   //
    public function socialLogin($provider){
        return Socialite::driver($provider)->redirect();
    }


    public function handleProviderCallback(\Modules\Accounts\Services\SocialAccountService $accountService, $provider){
        try {
            $user = \Socialite::with($provider)->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }
        $authUser = $accountService->findOrCreate(
            $user,
            $provider
        );
        auth()->login($authUser, true);
        return redirect()->intended('/');
    }

    public function redirectToProvider($provider){
        return \Socialite::driver($provider)->redirect();
    }
}
