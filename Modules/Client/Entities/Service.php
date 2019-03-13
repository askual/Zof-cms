<?php

namespace Modules\Client\Entities;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table='client-services';

    protected $fillable = ["user_id","service_name","active"];

    public function user(){
        return $this->belongsTo('Modules\Client\Entities\User','user_id');
    }

    
}
