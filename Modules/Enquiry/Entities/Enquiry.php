<?php

namespace Modules\Enquiry\Entities;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $table = 'enquiries-enquiries'; 
    protected $fillable = [
        'from', 'body'
    ];
    protected $casts = [
        'body' => 'array'
    ];
    
}
