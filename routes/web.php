<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin/dashboard','Backend\BackendController@index')->name('admin-dashboard')->middleware('auth');

// BRANDS ROUTE

Route::group(['prefix' => 'brands',  'middleware' => 'auth'], function()
{
    Route::get('/view','backend\BrandsController@view')->name('brands_view');
    Route::get('/add','Backend\BrandsController@add')->name('brands_add');
    Route::post('/store','Backend\BrandsController@store')->name('brands_store');
    Route::get('/brandStatus/{id}/{s}','Backend\BrandsController@BrandsStatus')->name('brands_status');
    Route::get('/edit/{id}','Backend\BrandsController@edit')->name('brands_edit');
    Route::put('/update/{id}','Backend\BrandsController@update')->name('brands_update');
    Route::get('/delete/{id}','Backend\BrandsController@delete')->name('brands_delete');

});

// CATEGORIES ROUTE

Route::group(['prefix' => 'categories',  'middleware' => 'auth'], function()
{
    Route::get('/view','Backend\CategoriesController@view')->name('categories_view');
    Route::get('/add','Backend\CategoriesController@add')->name('categories_add');
    Route::post('/store','Backend\CategoriesController@store')->name('categories_store');
    Route::get('/categoryStatus/{id}/{s}','Backend\CategoriesController@categoryStatus')->name('categories_status');
    Route::get('/edit/{id}','Backend\CategoriesController@edit')->name('categories_edit');
    Route::post('/update/{id}','Backend\CategoriesController@update')->name('categories_update');
    Route::get('/delete/{id}','Backend\CategoriesController@delete')->name('categories_delete');

});

// TAGS OUTE

Route::group(['prefix' => 'tag',  'middleware' => 'auth'], function()
{
    Route::get('/view','Backend\TagController@view')->name('tag_view');
    Route::get('/add','Backend\TagController@add')->name('tag_add');
    Route::post('/store','Backend\TagController@store')->name('tag_store');
    Route::get('/tagStatus/{id}/{s}','Backend\TagController@tagStatus')->name('tag_status');
    Route::get('/edit/{id}','Backend\TagController@edit')->name('tag_edit');
    Route::post('/update/{id}','Backend\TagController@update')->name('tag_update');
    Route::get('/delete/{id}','Backend\TagController@delete')->name('tag_delete');

});

// SIZE ROUTE

Route::group(['prefix' => 'size',  'middleware' => 'auth'], function()
{
    Route::get('/view','Backend\SizeController@view')->name('size_view');
    Route::get('/add','Backend\SizeController@add')->name('size_add');
    Route::post('/store','Backend\SizeController@store')->name('size_store');
    Route::get('/categoryStatus/{id}/{s}','Backend\SizeController@sizeStatus')->name('size_status');
    Route::get('/edit/{id}','Backend\SizeController@edit')->name('size_edit');
    Route::post('/update/{id}','Backend\SizeController@update')->name('size_update');
    Route::get('/delete/{id}','Backend\SizeController@delete')->name('size_delete');

});

// COLOR ROUTE

Route::group(['prefix' => 'color',  'middleware' => 'auth'], function()
{
    Route::get('/view','Backend\ColorController@view')->name('color_view');
    Route::get('/add','Backend\ColorController@add')->name('color_add');
    Route::post('/store','Backend\ColorController@store')->name('color_store');
    Route::get('/categoryStatus/{id}/{s}','Backend\ColorController@colorStatus')->name('color_status');
    Route::get('/edit/{id}','Backend\ColorController@edit')->name('color_edit');
    Route::post('/update/{id}','Backend\ColorController@update')->name('color_update');
    Route::get('/delete/{id}','Backend\ColorController@delete')->name('color_delete');

});
// PRODUCT ROUTE

Route::group(['prefix' => 'products',  'middleware' => 'auth'], function()
{
    Route::get('/view','Backend\ProductsController@view')->name('product_view');
    Route::get('/add','Backend\ProductsController@add')->name('product_add');
    Route::post('/store','Backend\ProductsController@store')->name('product_store');
    Route::get('/productStatus/{id}/{s}','Backend\ProductsController@productStatus')->name('product_status');
    Route::get('/find-categories/{id}','Backend\ProductsController@findCategories')->name('find_categories');
    Route::get('/upByingPrice/{id}/{price}','Backend\ProductsController@upByingPrice')->name('upByingPrice');
    Route::get('/edit/{id}','Backend\ProductsController@edit')->name('product_edit');
    Route::post('/update/{id}','Backend\ProductsController@update')->name('product_update');
    Route::get('/delete/{id}','Backend\ProductsController@delete')->name('product_delete');

});
