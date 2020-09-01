<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    public $fillable = ['img', 'blog_title', 'blog_post', 'author', 'status', 'category'];
}
