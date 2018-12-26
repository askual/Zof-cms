<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'blog-posts';
    protected $fillable = ['title','slug','excerpt','body','picture','status'];

}
