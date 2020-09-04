<?php

namespace App\Http\Controllers\Backend;

use App\Brands;
use App\Categories;
use App\Color;
use App\Products;
use App\size;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Image;
use App\Models\File;


class ProductsController extends Controller
{

    public function view()
    {
//        $products = Product::get();
        return view('backend.storemanagment.products.product_view');

    }

    public function add()
    {

 $brands = Brands::all();
 $colors = Color::all();
 $sizes = size::all();
 $categories= Categories::all();
 $tags= Tag::all();
        return view('layouts.admin.storemanagment.products.product_add',compact('brands','colors','sizes','categories','tags'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name' => ['required','unique:Products,product_name'],
        ]);
        $products= null;
        try {

            $product_name = $request->product_name;
            $products = Products::create([
                'cat_id' =>$request->cat_id,
                'color_id' =>$request->color_id,
                'brand_id' =>$request->brand_id,
                'size_id' =>$request->size_id,
                'tags_id' =>$request->tags_id,
                'product_name' => $product_name,
                'product_slug' => slugify($product_name),
                'description' =>$request->description,
                'regular_price' =>$request->regular_price,
                'sale_price' =>$request->sale_price,
                'sale_date_start' =>$request->sale_date_start,
                'sale_date_end' =>$request->sale_date_end,
                'product_model' =>$request->product_model,
                'product_code' =>$request->product_code,
                'product_status' =>$request->product_status,
                'product_weight' =>$request->product_weight,
                'product_description' =>$request->product_description,
                'quantity' =>$request->quantity,
                'warranty' =>$request->warranty,
                'warranty_duration' =>$request->warranty_duration,
                'warranty_condition' =>$request->warranty_condition,
                'video_url' =>$request->video_url,
                'status' => $request->status,

            ]);

            if ($request->file('featured_image')) {
                $file = $request->file('featured_image');
                @unlink(public_path('upload/store_managment/products/' . $products->featured_image));
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/store_managment/products'), $filename);
                $products->featured_image = $filename;
          }
            //  Handle multiple file upload
            $gallery=[];
            if ($request->hasFile('product_gallery'))
            {
                foreach ($request->file('product_gallery')as $image_gallary)
                {
                    $name=time().'.'.$image_gallary->getClientOriginalName();
                    $image_gallary->move(public_path('upload/store_managment/products'),$name);
                    array_push($gallery,$name);
                }
            }
            $products->product_gallery=implode(',',$gallery);
//            dd($products);
//            return $products;
            $products->save();



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
        $users = Product::find($id);
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
        $product = Product::select('id', 'buying_price')->find($id);
        $product->buying_price = $price;
        $product->update();

    }

    public function edit($id)
    {
        $id = base64_decode($id);
        $sliders = Slider::find($id);
        return view('backend.sliders.sliders_edit', compact('sliders'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "image" => "required",

        ]);
        $slider = Slider::find($id);
        $success = null;
        try {
            $image = $request->file('image');
            @unlink(public_path('upload/sliders/' . $slider->image));
            $fileEx = $image->getClientOriginalName();
            $fileName = date('Y-m-d') . $fileEx;
            Image::make($image)->resize(80, 80)->save(public_path('upload/sliders/') . $fileName);
            $slider->update([
                'title' => $slider->title,
                'sub_title' => $slider->sub_title,
                'image' => $fileName,
                'url' => $slider->url,
                'start_date' => $slider->start_date,
                'end_date' => $slider->end_date,

            ]);


            $success = true;
        } catch (Exception $exception) {
            $success = false;
        }
        if ($success === true) {
            return redirect()->route('sliders_view')->with('success', 'Yah ! Slider has been successfully update !');
        } else {
            return back()->with('error', 'Oops! Unable to update a Slider ');
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
