<?php

namespace Modules\Accounts\Entities;

use Illuminate\Database\Eloquent\Model;

class UserSocialAccount extends Model
{
    protected $table='accounts-user_social_accounts';

    protected $fillable = [
        'provider_name', 'provider_id'
    ];

    public function user(){
	    return $this->belongsTo('Modules\Accounts\Entities\User');
	}
}
