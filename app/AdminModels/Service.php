<?php

namespace App\AdminModels;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
     protected $fillable = [
        'service_name', 'service_about', 'service_image'
    ];
}
