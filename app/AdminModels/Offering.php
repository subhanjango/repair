<?php

namespace App\AdminModels;

use Illuminate\Database\Eloquent\Model;

class Offering extends Model
{
    //
        protected $fillable = [
        'offering', 'package_id'
    ];

      public function package()
    {
        return $this->belongsTo('App\AdminModels\Pricing');
    }
}
