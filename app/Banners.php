<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
	protected $fillable = [
		'home_banner', 'url','status'
	];
}
