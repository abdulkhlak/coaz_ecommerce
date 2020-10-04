<?php

namespace App\Http\Controllers\Backend;

use App\Banners;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannersController extends Controller
{

	public function view()
	{

		$banners = Banners::get();
		return view('layouts.admin.banners.banner_view', compact('banners'));
	}

	public function add()
	{
		return view('layouts.admin.banners.banner_add');
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'home_banner' => ['required'],
		]);
		$banners = null;
		try {

			$banners = Banners::create([
				'url' => $request->url,
				'status' => $request->status,

			]);


			if ($request->file('home_banner')) {
				$file = $request->file('home_banner');
				@unlink(public_path('upload/banners/' . $banners->home_banner));
				$filename = date('YmdHi') . $file->getClientOriginalName();
				$file->move(public_path('upload/banners'), $filename);
				$banners['home_banner'] = $filename;
			}


			$banners->save();



		} catch (Exception $exception) {
			$banners = false;
		}
		if ($banners == true) {
			return redirect()->route('banner_view')->with('success', 'Banner has been successfully created !');
		} else {
			return back()->with('error', 'Oops! Unable to create a banner ');
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
		$banners = Banners::find($id);
		return view('layouts.admin.banners.banner_edit', compact('banners'));
	}


	public function update(Request $request, $id)
	{

		$banners = Banners::find($id);
		$success = null;
		try {
			$banners->update([
				'url' => $request->url,
				'status' => $request->status,

			]);
			if ($request->file('home_banner')) {
				$file = $request->file('home_banner');
				@unlink(public_path('upload/banners/' . $banners->home_banner));
				$filename = date('YmdHi') . $file->getClientOriginalName();
				$file->move(public_path('upload/banners'), $filename);
				$banners['home_banner'] = $filename;
			}
			$banners->save();


			$success = true;
		} catch (Exception $exception) {
			$success = false;
		}
		if ($success === true) {
			return redirect()->route('banner_view')->with('success', 'Banner has been successfully update !');
		} else {
			return back()->with('error', 'Oops! Unable to update a Banner ');
		}


	}

	public function delete($id)
	{
		$id = base64_decode($id);

		$banners = Banners::find($id);
		$banners->delete();
		return redirect()->route('banner_view')->with('success', ' banner has been delete successfully');
	}
}
