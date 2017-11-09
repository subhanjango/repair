<?php

namespace App\AdminModels;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
     protected $fillable = [
        'blog_name', 'blog_content', 'blog_image'
    ];
}
