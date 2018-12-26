<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'blog-categories';
    protected $fillable = ['name'];

}
