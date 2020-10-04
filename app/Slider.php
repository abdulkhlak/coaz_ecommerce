<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
	protected $fillable = [
		'title', 'sub_title','slider_image', 'url','start_date','end_date','status'
	];
}
