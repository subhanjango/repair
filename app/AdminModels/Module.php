<?php

namespace App\AdminModels;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //
     protected $fillable = [
        'id','service_id', 'module_title' , 'module_description' , 'select_type' , 'sort_id'
    ]; 

    public function option(){
        return $this->hasMany('App\AdminModels\ModuleOptions','module_id');
    }

    public function service(){
        return $this->belongsTo('App\AdminModels\Service','service_id');
    }
}
