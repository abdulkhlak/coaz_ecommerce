<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $fillable = [
        'brand_name', 'brand_slug','brand_desc', 'brand_logo','status',
    ];
}
