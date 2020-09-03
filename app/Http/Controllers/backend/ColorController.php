<?php

namespace App\Http\Controllers\Backend;

use App\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{

    public function view()
    {
        $colors = Color::all();
        return view('layouts.admin.storemanagment.color.color_view',compact('colors'));

    }

    public function add()
    {
        return view('layouts.admin.storemanagment.color.color_add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'color_name' => ['required', 'string', 'max:100','unique:Colors,color_name'],
        ]);
        $colors= null;
        try {
            $color = Color::create([
                'color_name' => $request->color_name,
                'color_desc' =>$request->color_desc,
                'status' => $request->status,

            ]);
            //return $color;
            $color->save();



        } catch (Exception $exception) {
            $colors = false;
        }
        if ($colors == true) {
            return redirect()->route('color_view')->with('success', 'Color has been successfully created !');
        } else {
            return back()->with('error', 'Oops! Unable to create a Color ');
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
        $allcolor = Color::find($id);
        //dd($category);
        return view('layouts.admin.storemanagment.color.color_edit', compact('allcolor'));
    }


    public function update(Request $request , $id)
    {
        $request->validate([
            "color_name" => "required| unique:Colors,color_name,".$id,

        ]);
        $color = Color::find($id);
        $success= null;
        try {
            $color-> update([
                'color_name' => $request->color_name,
                'color_desc' =>$request->color_desc,
                'status' => $request->status,

            ]);
            $color->save();


            $success = true;
        } catch (Exception $exception) {
            $success = false;
        }
        if ($success === true) {
            return redirect()->route('color_view')->with('success', 'Color has been successfully update !');
        } else {
            return back()->with('error', 'Oops! Unable to update a Color ');
        }



    }
    public function delete($id)
    {
        $id = base64_decode($id);

        $color = Color::find($id);
        $color->delete();
        return redirect()->route('color_view')->with('success', ' Color has been delete successfully');
    }

}
