<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('items', 'ItemController@index');
Route::get('item/{id}', 'ItemController@show');
Route::delete('item/{id}', 'ItemController@destroy');
Route::post('item/', 'ItemController@create');
Route::put('item/{id}', 'ItemController@update');

Route::get('categories', 'CategoryController@index');
