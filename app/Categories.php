<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'category_name', 'category_slug','parent_id', 'category_desc', 'category_logo','status',
    ];
    public function parent()
    {
        return $this->belongsTo(Categories::class, 'parent_id','id');
    }
    public function child()
    {
        return $this->hasMany(Categories::class, 'parent_id');
    }

    public function allChild()
    {
        return $this->child()->with('allChild');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['category_name'] = $value;
        $this->attributes['category_slug'] = str_slug($value);
    }
    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
