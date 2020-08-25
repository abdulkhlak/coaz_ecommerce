<?php

namespace App\Http\Controllers\Backend;

use App\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{

    public function view()
    {
        $categories = Categories::all();
        return view('layouts.admin.storemanagment.categories.categories_view',compact('categories'));

    }

    public function add()
    {
        $categories = Categories::with('allChild')
            ->where('status','=',1)
            ->where('parent_id','=',0)
            ->get();



        return view('layouts.admin.storemanagment.categories.categories_add',compact('categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => ['required', 'string', 'max:100','unique:Categories,category_name'],
        ]);
        $category= null;
        try {
            $category_name = $request->category_name;
            $category = Categories::create([
                'category_name' => $category_name,
                'parent_id' =>$request->category,
                'category_slug' => slugify($category_name),
                'category_parent' =>$request->category_parent,
                'category_desc' =>$request->category_desc,
                'status' => $request->status,

            ]);

            if ($request->file('category_logo')) {
                $file = $request->file('category_logo');
                @unlink(public_path('upload/store_managment/icon/' .$category->category_logo));
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/store_managment/icon'), $filename);
                $category['category_logo'] = $filename;
            }
            $category->save();



        } catch (Exception $exception) {
            $category = false;
        }
        if ($category == true) {
            return redirect()->route('categories_view')->with('success', 'Category has been successfully created !');
        } else {
            return back()->with('error', 'Oops! Unable to create a Category ');
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

        $id= base64_decode($id);
        $category = Categories::find($id);
        //dd($category);
        $allchilds = Categories::with('allChild')
            ->where('status','=',1)
            ->where('parent_id','=',0)
            ->get();
        return view('layouts.admin.storemanagment.categories.category_edit', compact('category','allchilds'));
    }


    public function update(Request $request , $id)
    {
        $request->validate([
            "category_name" => "required| unique:Categories,category_name,".$id,

        ]);
        $category = Categories::find($id);
        $success= null;
        try {
            $category_name = $request->category_name;
            $category-> update([
                'category_name' => $category_name,
                'category_slug' => slugify($category_name),
                'category_desc' =>$request->category_desc,
                'parent_id' =>$request->category,
                'status' => $request->status,

            ]);
            if ($request->file('brand_logo')) {
                $file = $request->file('brand_logo');
                @unlink(public_path('upload/store_managment/icon/' . $category->category_logo));
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/store_managment/icon'), $filename);
                $brand['category_logo'] = $filename;
            }
            $category->save();


            $success = true;
        } catch (Exception $exception) {
            $success = false;
        }
        if ($success === true) {
            return redirect()->route('categories_view')->with('success', 'Category has been successfully update !');
        } else {
            return back()->with('error', 'Oops! Unable to update a Category ');
        }



    }
    public function delete($id)
    {
        $id = base64_decode($id);

        $category = Categories::find($id);
        $category->delete();
        return redirect()->route('categories_view')->with('success', ' Category has been delete successfully');
    }

}
