<?php

namespace App\Http\Controllers\Backend;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
	public function view()
	{

		$sliders = Slider::get();
		return view('layouts.admin.sliders.slider_view', compact('sliders'));
	}

	public function add()
	{
		return view('layouts.admin.sliders.slider_add');
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'slider_image' => ['required'],
		]);
		$sliders = null;
		try {

			$sliders = Slider::create([
				'title' => $request->title,
				'sub_title' => $request->sub_title,
				'url' => $request->url,
				'start_date' => $request->start_date,
				'end_date' => $request->end_date,
				'status' => $request->status,

			]);


			if ($request->file('slider_image')) {
				$file = $request->file('slider_image');
				@unlink(public_path('upload/sliders/' . $sliders->slider_image));
				$filename = date('YmdHi') . $file->getClientOriginalName();
				$file->move(public_path('upload/sliders'), $filename);
				$sliders['slider_image'] = $filename;
			}


			$sliders->save();



		} catch (Exception $exception) {
			$sliders = false;
		}
		if ($sliders == true) {
			return redirect()->route('slider_view')->with('success', 'Slider has been successfully created !');
		} else {
			return back()->with('error', 'Oops! Unable to create a slider ');
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
		$sliders = Slider::find($id);
		return view('layouts.admin.sliders.slider_edit', compact('sliders'));
	}


	public function update(Request $request, $id)
	{

		$sliders = Slider::find($id);
		$success = null;
		try {
			$sliders->update([
				'title' => $request->title,
				'sub_title' => $request->sub_title,
				'url' => $request->url,
				'start_date' => $request->start_date,
				'end_date' => $request->end_date,
				'status' => $request->status,

			]);
			if ($request->file('slider_image')) {
				$file = $request->file('slider_image');
				@unlink(public_path('upload/sliders/' . $sliders->slider_image));
				$filename = date('YmdHi') . $file->getClientOriginalName();
				$file->move(public_path('upload/sliders'), $filename);
				$sliders['slider_image'] = $filename;
			}
			$sliders->save();


			$success = true;
		} catch (Exception $exception) {
			$success = false;
		}
		if ($success === true) {
			return redirect()->route('slider_view')->with('success', 'Slider has been successfully update !');
		} else {
			return back()->with('error', 'Oops! Unable to update a Slider ');
		}


	}

	public function delete($id)
	{
		$id = base64_decode($id);

		$slider = Slider::find($id);
		$slider->delete();
		return redirect()->route('slider_view')->with('success', ' slider has been delete successfully');
	}

}
