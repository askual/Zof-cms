<?php

namespace Modules\Accounts\Services;

use Laravel\Socialite\Contracts\User as ProviderUser;
use Modules\Accounts\Entities\User;
use Modules\Accounts\Entities\UserSocialAccount;

class SocialAccountService{

    public function findOrCreate(ProviderUser $providerUser, $provider){
        $account = UserSocialAccount::where('provider_name', $provider)
                   ->where('provider_id', $providerUser->getId())
                   ->first();
        if ($account && $account->user) {
            return $account->user;
        } elseif ($account) {
            $user = User::where('email', $providerUser->getEmail())->first();
            if (! $user) {
                if(!$providerUser->getEmail() || $providerUser->getEmail() == ""){
                    $user = User::create([  
                        'email' => $providerUser->getId(),
                        'name'  => $providerUser->getName(),
                    ]);
                }else{
                    $user = User::create([  
                        'email' => $providerUser->getEmail(),
                        'name'  => $providerUser->getName(),
                    ]);
                }
            }
            $flight = UserSocialAccount::where([
                                    'provider_id'   => $providerUser->getId(),
                                    'provider_name' => $provider])->get()[0];
            $flight->delete();
            $user->accounts()->create([
                'provider_id'   => $providerUser->getId(),
                'provider_name' => $provider,
            ]);
            return $user;
        } else {
            $user = User::where('email', $providerUser->getEmail())->first();
            if (! $user) {
                if(!$providerUser->getEmail() || $providerUser->getEmail() == ""){
                    $user = User::create([  
                        'email' => $providerUser->getId(),
                        'name'  => $providerUser->getName(),
                    ]);
                }else{
                    $user = User::create([  
                        'email' => $providerUser->getEmail(),
                        'name'  => $providerUser->getName(),
                    ]);
                }
            }
            $user->accounts()->create([
                'provider_id'   => $providerUser->getId(),
                'provider_name' => $provider,
            ]);
            return $user;
        }
    }
}