<?php

namespace Modules\AlenSys\Entities;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name','phone','email','address','sex'
    ];

    protected $table = 'alensys-members';
}
