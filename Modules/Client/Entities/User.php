<?php

namespace Modules\Client\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table='client-users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function services(){
        return $this->hasMany('Modules\Client\Entities\Service');
    }
    public function getHasGcsuiteAttribute(){
        if($this->services->pluck('service_name')->contains('gcsuite')){
            return true;
        }
        return false;
    } 
    public function getZoffsitesAttribute(){
        if($this->services->pluck('service_name')->contains('zoffsites')){
            return true;
        }
        return false;
    } 




}

