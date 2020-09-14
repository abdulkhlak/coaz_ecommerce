<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

    protected $fillable = [
        'product_name', 'product_slug','description','regular_price','sale_price','sale_date_start','sale_date_end',
        'product_model','product_code','product_status','product_weight','cat_id','brand_id','color_id',
        'size_id','product_description','tags_id','warranty','warranty_duration','warranty_condition','video_url',
        'featured_image','product_gallery','status'];

    // category reationship

    public function category()
    {
        return $this->belongsTo(Categories::class,'cat_id');
    }

    // tag reationship

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'product_tags','product_id','tag_id');
    }
    // size reationship
    public function sizes()
    {
        return $this->belongsToMany(size::class,'product_sizes','product_id','size_id');
    }
    // color reationship
    public function colors()
    {
        return $this->belongsToMany(Color::class,'product_colors','product_id','color_id');
    }
}
