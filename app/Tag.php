<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'tag_name','tag_slug', 'tag_desc','status'];

    public function products()
    {
        return $this->hasMany(Products::class);
    }

    // product tags
    public function product_tags()
    {
        return $this->hasMany(Product_tags::class);
    }
}
