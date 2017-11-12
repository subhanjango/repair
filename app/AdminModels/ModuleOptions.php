<?php

namespace App\AdminModels;

use Illuminate\Database\Eloquent\Model;

class ModuleOptions extends Model
{
    //
    protected $fillable=[
        'title','image','parent_id','cost','module_id'
    ];
}
