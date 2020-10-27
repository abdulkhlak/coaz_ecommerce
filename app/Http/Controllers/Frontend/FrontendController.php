<?php

namespace App\Http\Controllers\Frontend;

use App\Banners;
use App\Brands;
use App\Products;
use App\Slider;
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
		$banners= Banners::where('status','1')->get();
		$sliders= Slider::where('status','1')->get();
		$brands= Brands::where('status','1')->get();

		//dd($categories);
		//return $brands;
		return view('frontend',compact('categories','banners','sliders','brands'));
	}



	// category wise product showing
	public function cat_wise_product($slug)
	{
		$id= Categories::where('category_slug',$slug)->pluck('id');
		$products= Products::where('cat_id', $id)->get();
	return $products;
		return view('frontend.pages.sub_wise_product',compact('products'));
	}

}
