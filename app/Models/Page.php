<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title', 'slug', 'body', 'status','page_type_id'
    ];

    public function page_type(){
        return $this->belongsTo('App\PageType');
    }
    public function getTagsAttribute(){
        if(Collect($this->body)->count()==0){
            return "";
        }
        $ans="\"";
        foreach(Collect($this->body) as $tt){
            $ans= $ans.$tt."\" ,\"";
        }
        return substr($ans,0,strlen($ans)-2);
    }

    protected $casts = [
        'body' => 'array'
    ];
}
