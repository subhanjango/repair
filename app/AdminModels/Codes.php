<?php

namespace App\AdminModels;

use Illuminate\Database\Eloquent\Model;

class Codes extends Model
{
    //
          protected $fillable = [
        'type', 'code' ,'package_id'
    ];

      public function pricing()
    {
        return $this->belongsTo('App\AdminModels\Pricing');
    }
}
