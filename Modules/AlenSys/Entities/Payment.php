<?php

namespace Modules\AlenSys\Entities;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'alensys-payments';
    
    protected $fillable = [
        'member_id', 'month', 'year', 'amount'
    ];

    public function getTheMonthAttribute(){
        $id = $this->month - 1;
        $months = ['January','February',"March",'April',"May",'June','July','Augest','September','October','November','December'];
        return $months[$id];
    }
    public function member(){
        return $this->belongsTo('Modules\AlenSys\Entities\Member');
    }
}
