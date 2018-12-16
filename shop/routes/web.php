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

Route::get('/', ["uses"=>"ProductsController@index", 'as'=>'allProducts']);

Route::get('products', ["uses"=>"ProductsController@index", 'as'=>'allProducts']);

//ikss
Route::get('products/ikss', ["uses"=>"ProductsController@ikssProducts", 'as'=>'ikssProducts']);
//isit
Route::get('products/isit', ["uses"=>"ProductsController@isitProducts", 'as'=>'isitProducts']);

//tshirt
Route::get('products/tshirt', ["uses"=>"ProductsController@tshirtProducts", 'as'=>'tshirtProducts']);
//hoodie
Route::get('products/hoodie', ["uses"=>"ProductsController@hoodieProducts", 'as'=>'hoodieProducts']);


Route::get('product/addToCart/{id}',['uses'=>'ProductsController@addProductToCart','as'=>'AddToCartProduct']);

//show cart items
Route::get('cart',['uses'=>'ProductsController@showCart','as'=>'cartproducts']);

//delete items from cart
Route::get('product/deleteItemFromCart/{id}',['uses'=>'ProductsController@deleteItemFromCart','as'=>'DeleteItemFromCart']);

//user auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin panel
Route::get('admin/products', ["uses"=>"Admin\AdminProductsController@index", 'as'=>'adminDisplayProducts'])->middleware('restrictToAdmin');

//display edit product form
Route::get('admin/editProductForm/{id}', ["uses"=>"Admin\AdminProductsController@editProductForm", 'as'=>'adminEditProductForm'])->middleware('restrictToAdmin');

//display edit product image form
Route::get('admin/editProductImageForm/{id}', ["uses"=>"Admin\AdminProductsController@editProductImageForm", 'as'=>'adminEditProductImageForm'])->middleware('restrictToAdmin');

//update product image
Route::post('admin/updataProductImage/{id}', ["uses"=>"Admin\AdminProductsController@updateProductImage", 'as'=>'adminUpdateProductImage'])->middleware('restrictToAdmin');

//update product data
Route::post('admin/updataProduct/{id}', ["uses"=>"Admin\AdminProductsController@updateProduct", 'as'=>'adminUpdateProduct'])->middleware('restrictToAdmin');

//contacts page
Route::get('/contacts', function(){
    return view('contacts');
    });

//display create product form
Route::get('admin/createProductForm', ["uses"=>"Admin\AdminProductsController@createProductForm", 'as'=>'adminCreateProductForm']);

//send new product data to database
Route::post('admin/sendCrateProductProduct', ["uses"=>"Admin\AdminProductsController@sendCreateProductForm", 'as'=>'adminSendCreateProductForm']);

//delete product
Route::get('admin/deleteProduct/{id}', ["uses"=>"Admin\AdminProductsController@deleteProduct", 'as'=>'adminDeleteProduct']);
