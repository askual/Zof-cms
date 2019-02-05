<?php

namespace Modules\AlenSys\Entities;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'alensys-members';
    protected $fillable = [
        'name','phone','email','address','sex', 'citizenship' , 'upline_id'
    ];
    public function downline(){
        return $this->hasMany('Modules\AlenSys\Entities\Member');
        // return $this->hasOne('Modules\AlenSys\Entities\Member');
    }
    public function upline(){
        return $this->belongsTo('Modules\AlenSys\Entities\Member' , 'upline_id');
    }
    public function payments(){
        return $this->hasMany('Modules\AlenSys\Entities\Payment');
    }
    public function getDownlinesAttribute(){
    	return \Modules\AlenSys\Entities\Member::where('upline_id',$this->id)->get();
    }
    public function getRecentPaymentsAttribute(){
    	return \Modules\AlenSys\Entities\Payment::where([
    		'member_id' => $this->id, 'year' => now()->year
    	])->get();
        return $this->belongsTo('Modules\AlenSys\Entities\Member');
    }
    public function getFullDownlineAttribute(){
    	if (sizeof($this->downlines) < 5) {
    		return false;
    	} else {
    		return true;
    	}
    }
    public function getLastPayedAttribute(){
    	$c = Collect($this->payments)->sortByDesc('id');
    	if (isset($c[0])) {
    		return $c[0];
    	}
    	return '-';
    }
    public function getPayedThisMonthAttribute(){
    	$s = \Modules\AlenSys\Entities\Payment::where([
    		'member_id' => $this->id, 'month' => now()->month, 'year' => now()->year
    	])->count();
    	if ($s==0) {
    		return false;
    	}
    	return true;
    }
    public function getTotalPayedAttribute(){
    	$amounts =  \Modules\AlenSys\Entities\Payment::where([
    		'member_id' => $this->id
    	])->pluck('amount');
    	return Collect($amounts)->sum();
    }

}
