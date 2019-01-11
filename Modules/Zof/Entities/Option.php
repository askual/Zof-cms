<?php

namespace Modules\Zof\Entities;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table = 'zof-options';
    protected $fillable = [
        'name', 'value', 'list'
    ];
    protected $casts = [
        'list' => 'array'
    ];
}
    
    

