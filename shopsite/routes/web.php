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

Route::get('/', 'ItemController@index');

Route::get('/product/{item}','ItemController@showItem', function($item)
{
    return view('product', ['categories' => App\Models\Category::all()]);
});

Route::get('/', function()
{
    return view('home', ['categories' => App\Models\Category::all()]);
});
//Route::get('/product', function()
//{
//    return view('product', ['categories' => App\Models\Category::all()]);
//});