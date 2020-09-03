<?php

namespace App\Http\Controllers\Backend;

use App\size;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SizeController extends Controller
{

    public function view()
    {
        $sizes = size::all();
        return view('layouts.admin.storemanagment.size.size_view',compact('sizes'));

    }

    public function add()
    {
        return view('layouts.admin.storemanagment.size.size_add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'size_name' => ['required', 'unique:Sizes,size_name'],
        ]);
        $size= null;
        try {
            $size = size::create([
                'size_name' =>$request->size_name,
                'size_desc' =>$request->size_desc,
                'status' => $request->status,

            ]);
            $size->save();



        } catch (Exception $exception) {
            $size = false;
        }
        if ($size == true) {
            return redirect()->route('size_add')->with('success', 'Post published.');
        } else {
            return back()->with('error', 'Oops! Unable to create a Post ');
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
        $allsize = size::find($id);

        return view('layouts.admin.storemanagment.size.size_edit', compact('allsize'));
    }


    public function update(Request $request , $id)
    {
        $this->validate($request, [
            "size_name" => "required| unique:Sizes,size_name,".$id,
        ]);
        $size = size::find($id);
        $success= null;
        try {
            $size-> update([

                'size_name' =>$request->size_name,
                'size_desc' =>$request->size_desc,
                'status' => $request->status,

            ]);
            $size->save();


            $success = true;
        } catch (Exception $exception) {
            $success = false;
        }
        if ($success === true) {
            return redirect()->route('size_view')->with('success', 'Size has been successfully update !');
        } else {
            return back()->with('error', 'Oops! Unable to update a Size ');
        }



    }
    public function delete($id)
    {
        $id = base64_decode($id);

        $size = size::find($id);
        $size->delete();
        return redirect()->route('size_view')->with('success', ' Size has been delete successfully');
    }

}
