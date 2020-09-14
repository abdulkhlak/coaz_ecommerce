<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_tags extends Model
{
    protected $fillable = [
        'product_id','tag_id'];

}
