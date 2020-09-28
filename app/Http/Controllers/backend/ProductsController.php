<?php

namespace App\Http\Controllers\Backend;

use App\Brands;
use App\Categories;
use App\Color;
use App\Product_color;
use App\Product_image_gallery;
use App\Product_size;
use App\Product_tags;
use App\Products;
use App\size;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Image;


class ProductsController extends Controller
{

	public function view()
	{
		$products = Products::with('category', 'tags', 'sizes', 'colors')->get();
		// dd($products);

		return view('layouts.admin.storemanagment.products.product_view', compact('products'));

	}

	public function add()
	{

		$brands     = Brands::all();
		$colors     = Color::all();
		$sizes      = size::all();
		$categories = Categories::with('allChild')
			->where('status', '=', 1)
			->where('parent_id', '=', 0)
			->get();
		$tags       = Tag::all();
		return view('layouts.admin.storemanagment.products.product_add', compact('brands', 'colors',
			'sizes', 'categories', 'tags'));
	}


	public function store(Request $request)
	{
		$this->validate($request, [
			'product_name' => ['required', 'unique:Products,product_name'],
			'regular_price' => ['required'],
		]);
		$products = null;
		try {

			$product_name = $request->product_name;
			$products     = Products::create([
				'cat_id' => $request->cat_id,
				'brand_id' => $request->brand_id,
				'product_name' => $product_name,
				'product_slug' => slugify($product_name),
				'description' => $request->description,
				'regular_price' => $request->regular_price,
				'sale_price' => $request->sale_price,
				'sale_date_start' => $request->sale_date_start,
				'sale_date_end' => $request->sale_date_end,
				'product_model' => $request->product_model,
				'product_code' => $request->product_code,
				'product_status' => $request->product_status,
				'product_weight' => $request->product_weight,
				'product_description' => $request->product_description,
				'quantity' => $request->quantity,
				'warranty' => $request->warranty,
				'warranty_duration' => $request->warranty_duration,
				'warranty_condition' => $request->warranty_condition,
				'video_url' => $request->video_url,
				'status' => $request->status,

			]);


			if ($request->file('featured_image')) {
				$file = $request->file('featured_image');
			//	@unlink(public_path('upload/store_managment/products/' . $products->featured_image));
				$filename = date('YmdHi') . $file->getClientOriginalName();
				$file->move(public_path('upload/store_managment/products'), $filename);
				$products->featured_image = $filename;
			}


			$products->save();
			if ($products->save()) {
				$files = $request->product_gallery;
				if (!empty($files)) {
					foreach ($files as $file) {
						$imageName = date('Ymd') . $file->getClientOriginalName();
						$file->move('upload/store_managment/products/gallery_image/', $imageName);
						$product_gallery['product_gallery'] = $imageName;
						$product_gallery                    = new Product_image_gallery();
						$product_gallery->product_id        = $products->id;
						$product_gallery->product_gallery   = $imageName;
						$product_gallery->save();

					}
				}

				// tags
				$tags = $request->tags_id;
				if (!empty($tags)) {
					foreach ($tags as $tag) {
						$tags_             = new Product_tags();
						$tags_->product_id = $products->id;
						$tags_->tag_id     = $tag;
						$tags_->save();
					}
				}

				// Size
				$sizes = $request->size_id;
				if (!empty($sizes)) {
					foreach ($sizes as $size) {
						$size_             = new Product_size();
						$size_->product_id = $products->id;
						$size_->size_id    = $size;
						$size_->save();
					}
				}

				// Color
				$colors = $request->color_id;
				if (!empty($colors)) {
					foreach ($colors as $color) {
						$color_             = new Product_color();
						$color_->product_id = $products->id;
						$color_->color_id   = $color;
						$color_->save();
					}
				}

			}
			//  Handle multiple file upload
//            $gallery=[];
//            if ($request->hasFile('product_gallery'))
//            {
//                foreach ($request->file('product_gallery')as $image_gallary)
//                {
//                    $name=time().'.'.$image_gallary->getClientOriginalName();
//                    $image_gallary->move(public_path('upload/store_managment/products'),$name);
//                    array_push($gallery,$name);
//                }
//            }
//            // $products->product_gallery=implode(',',$gallery);
////            dd($products);
////
////            return $products;


		} catch (Exception $exception) {
			$products = false;
		}
		if ($products == true) {
			return redirect()->route('product_view')->with('success', 'Product has been successfully created !');
		} else {
			return back()->with('error', 'Oops! Unable to create a Product ');
		}

	}

	public function productStatus($id, $status)
	{
		$users         = Product::find($id);
		$users->status = $status;
		$users->save();
		return response()->json(['message' => 'success']);
	}

	/*
	 *   findCategories funcion
	 */

	public function findCategories($id)
	{
		$categories = subcategories::select('id', 'subcat_name')->where('category_id', $id)->get();
		echo ' <option selected disabled> select sub category</option>';
		foreach ($categories as $category) {
			echo '<option value="' . $category->id . '">' . $category->subcat_name . '</option>';
		}
	}

	/*
	 *   buying price update function
	 */
	public function upByingPrice($id, $price)
	{
		$product               = Product::select('id', 'buying_price')->find($id);
		$product->buying_price = $price;
		$product->update();

	}

	public function edit($id)
	{
		$id = base64_decode($id);

		$products_edit = Products::find($id);
		//return $products_edit;

		$brands        = Brands::all();
		$colors        = Color::all();
		$color_array   = Product_color::select('color_id')->where('product_id', $products_edit->id)->orderBy('id', 'asc')
			->get();
		$sizes         = size::all();
		$size_array    = Product_size::select('size_id')->where('product_id', $products_edit->id)->orderBy('id', 'asc')
			->get();
		$tags          = Tag::all();
		$tag_array     = Product_tags::select('tag_id')->where('product_id', $products_edit->id)->orderBy('id', 'asc')
			->get();
		$image_gallery = Product_image_gallery::where('product_id', $products_edit->id)
			->orderBy
			('id', 'asc')
			->get();
		//dd($size_array);


		$allchilds = Categories::with('allChild')
			->where('status', '=', 1)
			->where('parent_id', '=', 0)
			->get();
		return view('layouts.admin.storemanagment.products.product_edit', compact('products_edit',
			'allchilds', 'brands', 'colors', 'size_array', 'sizes', 'color_array',
			'tags', 'tag_array', 'image_gallery'
		));
	}
	public function update(Request $request ,$id)
	{
		$products = null;
		try {

//			$product_name = $request->product_name;
//			$products     = Products::find($id)([
//				'cat_id' => $request->cat_id,
//				'brand_id' => $request->brand_id,
//				'product_name' => $product_name,
//				'product_slug' => slugify($product_name),
//				'description' => $request->description,
//				'regular_price' => $request->regular_price,
//				'sale_price' => $request->sale_price,
//				'sale_date_start' => $request->sale_date_start,
//				'sale_date_end' => $request->sale_date_end,
//				'product_model' => $request->product_model,
//				'product_code' => $request->product_code,
//				'product_status' => $request->product_status,
//				'product_weight' => $request->product_weight,
//				'product_description' => $request->product_description,
//				'quantity' => $request->quantity,
//				'warranty' => $request->warranty,
//				'warranty_duration' => $request->warranty_duration,
//				'warranty_condition' => $request->warranty_condition,
//				'video_url' => $request->video_url,
//				'status' => $request->status,
//
//			]);
//
//
//			if ($request->file('featured_image')) {
//				$file = $request->file('featured_image');
//				//	@unlink(public_path('upload/store_managment/products/' . $products->featured_image));
//				$filename = date('YmdHi') . $file->getClientOriginalName();
//				$file->move(public_path('upload/store_managment/products'), $filename);
//				$products->featured_image = $filename;
//			}
//
//
//			$products->save();
			//if ($products->save()) {
				if($request->has('deletect_image')&& isset($request->deletect_image))
				{
					$deleted_image=$request->deletect_image;
					foreach(explode(',',$deleted_image) as $dimage)
					{
						$image=Product_image_gallery::find($dimage);
						File::delete("upload/store_managment/products/gallery_image/".$image->product_gallery);
						$image->delete();
					}
				}

				$files = $request->product_gallery;
				if (!empty($files)) {
					foreach ($files as $file) {
						$imageName = date('Ymd') . $file->getClientOriginalName();
						$file->move('upload/store_managment/products/gallery_image/', $imageName);
						//$product_gallery['product_gallery'] = $imageName;
						$product_gallery                    = new Product_image_gallery();
						$product_gallery->product_id        = $products->id;
						$product_gallery->product_gallery   = $imageName;
						$product_gallery->save();

					}
				}

				// tags
				$tags = $request->tags_id;
				if (!empty($tags)) {
					foreach ($tags as $tag) {
						$tags_             = new Product_tags();
						$tags_->product_id = $products->id;
						$tags_->tag_id     = $tag;
						$tags_->save();
					}
				}

				// Size
				$sizes = $request->size_id;
				if (!empty($sizes)) {
					foreach ($sizes as $size) {
						$size_             = new Product_size();
						$size_->product_id = $products->id;
						$size_->size_id    = $size;
						$size_->save();
					}
				}

				// Color
				$colors = $request->color_id;
				if (!empty($colors)) {
					foreach ($colors as $color) {
						$color_             = new Product_color();
						$color_->product_id = $products->id;
						$color_->color_id   = $color;
						$color_->save();
					}
				}

			//}
			//  Handle multiple file upload
//            $gallery=[];
//            if ($request->hasFile('product_gallery'))
//            {
//                foreach ($request->file('product_gallery')as $image_gallary)
//                {
//                    $name=time().'.'.$image_gallary->getClientOriginalName();
//                    $image_gallary->move(public_path('upload/store_managment/products'),$name);
//                    array_push($gallery,$name);
//                }
//            }
//            // $products->product_gallery=implode(',',$gallery);
////            dd($products);
////
////            return $products;


		} catch (Exception $exception) {
			$products = false;
		}
		if ($products == true) {
			return redirect()->route('product_view')->with('success', 'Product has been successfully created !');
		} else {
			return back()->with('error', 'Oops! Unable to create a Product ');
		}

	}



	public function delete($id)
	{
		try {
			$id = base64_decode($id);

			$slider = Slider::find($id);
			unlink(public_path('upload/sliders/') . $slider->image);
			$slider->delete();
			return redirect()->route('sliders_view')->with('success', ' slider has been delete successfully');
		} catch (Exception $exception) {
			return back()->with('error', 'Oops! Unable to delete a slider ');
		}

	}
}
