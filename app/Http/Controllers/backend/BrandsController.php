<?php

namespace App\Http\Controllers\Backend;

use App\Brands;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandsController extends Controller
{
    public function view()
    {

//        $brands = brands::get();
//        return view('layouts.admin.storemanagment.brands.brand_view',compact('brands'));
        $brands = brands::get();
        return view('layouts.admin.storemanagment.brands.brand_view', compact('brands'));
    }

    public function add()
    {
        return view('layouts.admin.storemanagment.brands.brand_add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'brand_name' => ['required', 'string', 'max:100', 'unique:brands,brand_name'],
        ]);
        $brands = null;
        try {
            $brand_name = $request->brand_name;
            $brands = Brands::create([
                'brand_name' => $brand_name,
                'brand_slug' => slugify($brand_name),
                'brand_desc' => $request->brand_desc,
                'status' => $request->status,

            ]);

            if ($request->file('brand_logo')) {
                $file = $request->file('brand_logo');
                @unlink(public_path('upload/store_managment/brands_logo/' . $brands->brand_logo));
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/store_managment/brands_logo'), $filename);
                $brands['brand_logo'] = $filename;
            }

            $brands->save();

            return $brands;

        } catch (Exception $exception) {
            $brands = false;
        }
        if ($brands == true) {
            return redirect()->route('brands_view')->with('success', 'Brand has been successfully created !');
        } else {
            return back()->with('error', 'Oops! Unable to create a brand ');
        }

    }

    public function BrandsStatus($id, $status)
    {
        $users = brands::find($id);
        $users->status = $status;
        $users->save();
        return response()->json(['message' => 'success']);
    }

    public function edit($id)
    {
        $id = base64_decode($id);
        $brands = Brands::find($id);
        return view('layouts.admin.storemanagment.brands.brand_edit', compact('brands'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            "brand_name" => "required| unique:brands,brand_name," . $id,

        ]);
        $brand = brands::find($id);
        $success = null;
        try {
            $brand_name = $request->brand_name;
            $brand->update([
                'brand_name' => $brand_name,
                'brand_slug' => slugify($brand_name),
                'brand_desc' => $request->brand_desc,
                'status' => $request->status,

            ]);
            if ($request->file('brand_logo')) {
                $file = $request->file('brand_logo');
                @unlink(public_path('upload/store_managment/brands_logo/' . $brand->brand_logo));
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/store_managment/brands_logo'), $filename);
                $brand['brand_logo'] = $filename;
            }
            $brand->save();


            $success = true;
        } catch (Exception $exception) {
            $success = false;
        }
        if ($success === true) {
            return redirect()->route('brands_view')->with('success', 'Brand has been successfully update !');
        } else {
            return back()->with('error', 'Oops! Unable to update a brand ');
        }


    }

    public function delete($id)
    {
        $id = base64_decode($id);

        $brand = brands::find($id);
        $brand->delete();
        return redirect()->route('brands_view')->with('success', ' brand has been delete successfully');
    }

}
