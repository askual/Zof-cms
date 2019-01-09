<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'from', 'body'
    ];
    protected $casts = [
        'body' => 'array'
    ];  
}
