<?php

namespace App\Http\Controllers\Backend;

use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{

    public function view()
    {

//        $brands = brands::get();
//        return view('layouts.admin.storemanagment.brands.brand_view',compact('brands'));
        $tags = Tag::get();
        return view('layouts.admin.storemanagment.product_tag.tag_view', compact('tags'));
    }

    public function add()
    {
        return view('layouts.admin.storemanagment.product_tag.tag_add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tag_name' => ['required','unique:tags,tag_name'],
        ]);
        $tags = null;
        try {
            $tag_name = $request->tag_name;
            $tags = Tag::create([
                'tag_name' => $tag_name,
                'tag_slug' => slugify($tag_name),
                'tag_desc' => $request->tag_desc,
                'status' => $request->status,

            ]);

            $tags->save();


        } catch (Exception $exception) {
            $tags = false;
        }
        if ($tags == true) {
            return redirect()->route('tag_view')->with('success', 'Tag has been successfully created !');
        } else {
            return back()->with('error', 'Oops! Unable to create a Tag ');
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
        $tags = Tag::find($id);
        return view('layouts.admin.storemanagment.product_tag.tag_edit', compact('tags'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            "tag_name" => "required| unique:tags,tag_name," . $id,

        ]);
        $tag = Tag::find($id);
        $success = null;
        try {
            $tag_name = $request->tag_name;
            $tag->update([
                'tag_name' => $tag_name,
                'tag_slug' => slugify($tag_name),
                'tag_desc' => $request->tag_desc,
                'status' => $request->status,

            ]);
            $tag->save();


            $success = true;
        } catch (Exception $exception) {
            $success = false;
        }
        if ($success === true) {
            return redirect()->route('tag_view')->with('success', 'Tag has been successfully update !');
        } else {
            return back()->with('error', 'Oops! Unable to update a Tag ');
        }


    }

    public function delete($id)
    {
        $id = base64_decode($id);

        $tag = Tag::find($id);
        $tag->delete();
        return redirect()->route('tag_view')->with('success', ' Tag has been delete successfully');
    }
}
