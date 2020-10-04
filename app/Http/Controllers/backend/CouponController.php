<?php

namespace App\Http\Controllers\Backend;

use App\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CouponController extends Controller
{
	//coupon view
	public function view()
	{

		$coupons = Coupon::get();
		return view('layouts.admin.coupon.coupon_view', compact('coupons'));
	}

	//coupon add
	public function add()
	{
		return view('layouts.admin.coupon.coupon_add');
	}

	// coupon store
	public function store(Request $request)
	{
		$this->validate($request, [
			'coupon_code' => ['required', 'string', 'max:50', 'unique:coupons,coupon_code'],
			'amount_type' => ['required'],
			'amount' => ['required'],
			'expiry_date' => ['required'],
			'status' => ['required'],
		]);
		$coupons = null;
		try {

			$coupon = Coupon::create([
				'coupon_code' => $request->coupon_code,
				'amount_type' => $request->amount_type,
				'amount' => $request->amount,
				'expiry_date' => $request->expiry_date,
				'status' => $request->status,

			]);

			$coupon->save();
			//dd($coupon);

			//return $brands;

		} catch (Exception $exception) {
			$coupons = false;
		}
		if ($coupons == true) {
			return redirect()->route('coupon_view')->with('success', 'coupon has been successfully created !');
		} else {
			return back()->with('error', 'Oops! Unable to create a coupon ');
		}

	}

	// coupon edit

	public function edit($id)
	{
		$id      = base64_decode($id);
		$coupons = Coupon::find($id);
		return view('layouts.admin.coupon.coupon_edit', compact('coupons'));
	}
	//coupon update

	public function update(Request $request, $id)
	{
		$request->validate([
			'coupon_code' => ['required', 'string', 'max:50', 'unique:coupons,coupon_code' ,$id],
			'amount_type' => ['required'],
			'amount' => ['required'],
			'expiry_date' => ['required'],
			'status' => ['required'],

		]);
		$coupon = Coupon::find($id);
		$success = null;
		try {
			$coupon->update([
				'coupon_code' => $request->coupon_code,
				'amount_type' => $request->amount_type,
				'amount' => $request->amount,
				'expiry_date' => $request->expiry_date,
				'status' => $request->status,

			]);
			$coupon->save();


			$success = true;
		} catch (Exception $exception) {
			$success = false;
		}
		if ($success === true) {
			return redirect()->route('coupon_view')->with('success', 'Coupon has been successfully update !');
		} else {
			return back()->with('error', 'Oops! Unable to update a Coupon ');
		}


	}
	// coupon delete

	public function delete($id)
	{
		$id = base64_decode($id);

		$coupon = Coupon::find($id);
		$coupon->delete();
		return redirect()->route('coupon_view')->with('success', ' coupon has been delete successfully');
	}
}
