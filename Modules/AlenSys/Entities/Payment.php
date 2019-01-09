<?php

namespace Modules\AlenSys\Entities;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'member_id', 'month'
    ];
    public function getTheMonthAttribute(){
        $id = $this->month - 1;
        $months = ['September','October','November','December','January','February',"March",'April',"May",'June','July','Augest'];
        return $months[$id];
    }
    public function member(){
        return $this->belongsTo('Modules\AlenSys\Entities\Member');
    }
}
