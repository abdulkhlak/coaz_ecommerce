<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;

class FrontendController extends Controller
{
	public function index()
	{
		$categories = Categories::with('allChild')
			->where('status','=',1)
			->where('parent_id','=',0)
			->get();
		//dd($categories);
		//return $categories;
		return view('frontend',compact('categories'));
	}


}
