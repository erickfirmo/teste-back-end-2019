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
/*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('products', 'Api\\ProductController@index');

Route::get('products/store', 'Api\\ProductController@store');

Route::get('products/{id}', 'Api\\ProductController@show');

Route::put('products/{id}/update', 'Api\\ProductController@update');

Route::delete('products/{id}/destroy', 'Api\\ProductController@destroy');

