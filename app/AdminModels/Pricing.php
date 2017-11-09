<?php

namespace App\AdminModels;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    //
       protected $fillable = [
        'package_price', 'package_name', 'package_offering','discount'
    ];

      public function codes()
    {
        return $this->hasMany('App\AdminModels\Codes','package_id','id');
    }
     public function offering()
    {
        return $this->hasMany('App\AdminModels\Offering','package_id','id');
    }
}
