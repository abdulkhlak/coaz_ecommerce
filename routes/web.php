<?php

// =============================FRONTEND ALL ROTUE ========================
Route::get('/','Frontend\FrontendController@index')->name('frontend');
Route::get('/category','Frontend\FrontendController@category')->name('category');






















// =============================BACKEND ALL ROTUE ========================
Auth::routes();

Route::get('/admin/dashboard','Backend\BackendController@index')->name('admin-dashboard')->middleware('auth');

// =============================BRAND ALL ROUTE========================

Route::group(['prefix' => 'brands',  'middleware' => 'auth'], function()
{
	//brand view route
    Route::get('/view','backend\BrandsController@view')->name('brands_view');
	//brand add route
    Route::get('/add','Backend\BrandsController@add')->name('brands_add');
	//brand store route
    Route::post('/store','Backend\BrandsController@store')->name('brands_store');
	//brand edit route
    Route::get('/edit/{id}','Backend\BrandsController@edit')->name('brands_edit');
	//brand update route
    Route::put('/update/{id}','Backend\BrandsController@update')->name('brands_update');
    //brand delete route
    Route::get('/delete/{id}','Backend\BrandsController@delete')->name('brands_delete');

});
// =============================CATEGORY ALL ROUTE========================

Route::group(['prefix' => 'categories',  'middleware' => 'auth'], function()
{
	//category view route
    Route::get('/view','Backend\CategoriesController@view')->name('categories_view');
	//category add route
    Route::get('/add','Backend\CategoriesController@add')->name('categories_add');
	//category store route
    Route::post('/store','Backend\CategoriesController@store')->name('categories_store');
	//category edit route
    Route::get('/edit/{id}','Backend\CategoriesController@edit')->name('categories_edit');
	//category update route
    Route::post('/update/{id}','Backend\CategoriesController@update')->name('categories_update');
	//category delete route
    Route::get('/delete/{id}','Backend\CategoriesController@delete')->name('categories_delete');

});
// =============================TAG ALL ROUTE========================

Route::group(['prefix' => 'tag',  'middleware' => 'auth'], function()
{
	//tag view route
    Route::get('/view','Backend\TagController@view')->name('tag_view');
	//tag add route
    Route::get('/add','Backend\TagController@add')->name('tag_add');
	//tag store route
    Route::post('/store','Backend\TagController@store')->name('tag_store');
	//tag edit route
    Route::get('/edit/{id}','Backend\TagController@edit')->name('tag_edit');
	//tag update route
    Route::post('/update/{id}','Backend\TagController@update')->name('tag_update');
    //tag delete route
    Route::get('/delete/{id}','Backend\TagController@delete')->name('tag_delete');

});
// =============================SIZE ALL ROUTE========================

Route::group(['prefix' => 'size',  'middleware' => 'auth'], function()
{
	//size view route
    Route::get('/view','Backend\SizeController@view')->name('size_view');
    //size add route
    Route::get('/add','Backend\SizeController@add')->name('size_add');
    //size store route
    Route::post('/store','Backend\SizeController@store')->name('size_store');
    //size edit route
    Route::get('/edit/{id}','Backend\SizeController@edit')->name('size_edit');
    //size update route
    Route::post('/update/{id}','Backend\SizeController@update')->name('size_update');
    //size delete route
    Route::get('/delete/{id}','Backend\SizeController@delete')->name('size_delete');

});
// =============================COLOR ALL ROUTE========================

Route::group(['prefix' => 'color',  'middleware' => 'auth'], function()
{
	//color view route
    Route::get('/view','Backend\ColorController@view')->name('color_view');
    //color add route
    Route::get('/add','Backend\ColorController@add')->name('color_add');
    //color store route
    Route::post('/store','Backend\ColorController@store')->name('color_store');;
    //color edit route
    Route::get('/edit/{id}','Backend\ColorController@edit')->name('color_edit');
    //coor update route
    Route::post('/update/{id}','Backend\ColorController@update')->name('color_update');
    //color delete route
    Route::get('/delete/{id}','Backend\ColorController@delete')->name('color_delete');

});
// =============================PRODUCT ALL ROUTE========================

Route::group(['prefix' => 'products',  'middleware' => 'auth'], function()
{
	//product view route
    Route::get('/view','Backend\ProductsController@view')->name('product_view');
    //product add route
    Route::get('/add','Backend\ProductsController@add')->name('product_add');
    //product store route
    Route::post('/store','Backend\ProductsController@store')->name('product_store');
    //product update buying pirce route
    Route::get('/upByingPrice/{id}/{price}','Backend\ProductsController@upByingPrice')->name('upByingPrice');
    //product edit route
    Route::get('/edit/{id}','Backend\ProductsController@edit')->name('product_edit');
    //product update route
    Route::post('/update/{id}','Backend\ProductsController@update')->name('product_update');
    //product delete route
    Route::get('/delete/{id}','Backend\ProductsController@delete')->name('product_delete');

});
// =============================COUPON CODE ALL ROUTE========================

Route::group(['prefix' => 'coupon',  'middleware' => 'auth'], function()
{
	//coupon view route
    Route::get('/view','Backend\CouponController@view')->name('coupon_view');
    //coupon add route
    Route::get('/add','Backend\CouponController@add')->name('coupon_add');
    //coupon store route
    Route::post('/store','Backend\CouponController@store')->name('coupon_store');
    //coupon edit route
    Route::get('/edit/{id}','Backend\CouponController@edit')->name('coupon_edit');
    //coupon update route
    Route::post('/update/{id}','Backend\CouponController@update')->name('coupon_update');
    //coupon delete route
    Route::get('/delete/{id}','Backend\CouponController@delete')->name('coupon_delete');

});
// =============================SLIDER  ALL ROUTE========================

Route::group(['prefix' => 'slider',  'middleware' => 'auth'], function()
{
	//sider view route
    Route::get('/view','Backend\SliderController@view')->name('slider_view');
    //sider add route
    Route::get('/add','Backend\SliderController@add')->name('slider_add');
    //sider store route
    Route::post('/store','Backend\SliderController@store')->name('slider_store');
    //sider edit route
    Route::get('/edit/{id}','Backend\SliderController@edit')->name('slider_edit');
    //sider update route
    Route::post('/update/{id}','Backend\SliderController@update')->name('slider_update');
    //sider delete route
    Route::get('/delete/{id}','Backend\SliderController@delete')->name('slider_delete');

});
// =============================BANNER  ALL ROUTE========================

Route::group(['prefix' => 'banner',  'middleware' => 'auth'], function()
{
	//banner view route
    Route::get('/view','Backend\BannersController@view')->name('banner_view');
    //banner add route
    Route::get('/add','Backend\BannersController@add')->name('banner_add');
    //banner store route
    Route::post('/store','Backend\BannersController@store')->name('banner_store');
    //banner edit route
    Route::get('/edit/{id}','Backend\BannersController@edit')->name('banner_edit');
    //banner update route
    Route::post('/update/{id}','Backend\BannersController@update')->name('banner_update');
    //banner delete route
    Route::get('/delete/{id}','Backend\BannersController@delete')->name('banner_delete');

});
