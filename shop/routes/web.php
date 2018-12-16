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

Route::get('products', ["uses"=>"ProductsController@index", 'as'=>'allProducts']);

Route::get('product/addToCart/{id}',['uses'=>'ProductsController@addProductToCart','as'=>'AddToCartProduct']);

//show cart items
Route::get('cart',['uses'=>'ProductsController@showCart','as'=>'cartproducts']);

//delete items from cart
Route::get('product/deleteItemFromCart/{id}',['uses'=>'ProductsController@deleteItemFromCart','as'=>'DeleteItemFromCart']);

//user auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin panel
Route::get('admin/products', ["uses"=>"Admin\AdminProductsController@index", 'as'=>'adminDisplayProducts']);

//display edit product form
Route::get('admin/editProductForm/{id}', ["uses"=>"Admin\AdminProductsController@editProductForm", 'as'=>'adminEditProductForm']);

//display edit product image form
Route::get('admin/editProductImageForm/{id}', ["uses"=>"Admin\AdminProductsController@editProductImageForm", 'as'=>'adminEditProductImageForm']);

//update product image
Route::post('admin/updataProductImage/{id}', ["uses"=>"Admin\AdminProductsController@updateProductImage", 'as'=>'adminUpdateProductImage']);

//update product
Route::post('admin/updataProduct/{id}', ["uses"=>"Admin\AdminProductsController@updateProduct", 'as'=>'adminUpdateProduct']);

//contacts page
Route::get('/contacts', function(){
    return view('contacts');
});
