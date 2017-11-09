<?php

namespace App\AdminModels;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //
    protected $fillable = [
        'company_name', 'company_address', 'company_email',
        'company_mobile', 'facebook', 'twitter',
        'google', 'logo', 'map_url'
    ];
}
