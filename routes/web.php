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
