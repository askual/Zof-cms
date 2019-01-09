<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name', 'links'
    ];

    // public function getTagsAttribute(){
    //     if(Collect($this->body)->count()==0){
    //         return "";
    //     }
    //     $ans="\"";
    //     foreach(Collect($this->body) as $tt){
    //         $ans= $ans.$tt."\" ,\"";
    //     }
    //     return substr($ans,0,strlen($ans)-2);
    // }

    protected $casts = [
        'links' => 'array'
    ];
}
