<?php

namespace App\AdminModels;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    //
    protected $fillable = [
        'client_name', 'designation', 'review', 'image'
    ];
}
