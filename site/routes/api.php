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

Route::group(['middleware' => ['apiJwt']], function(){
    
    Route::get('users', 'Api\UserController@index');

    Route::get('products', 'Api\ProductController@index');

    Route::get('products/{id}', 'Api\ProductController@show');

    Route::post('products/store', 'Api\ProductController@store');

    Route::put('products/{id}/update', 'Api\ProductController@update');

    Route::delete('products/{id}/destroy', 'Api\ProductController@destroy');
});





/* Auth routes */

Route::prefix('auth')->group(function () {
    Route::post('login', 'Api\AuthController@login');

});


