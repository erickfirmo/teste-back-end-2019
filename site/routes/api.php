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




// auth routes
Route::prefix('auth')->group(function () {
    Route::post('login', 'Api\AuthController@login');
    Route::post('refresh', 'Api\AuthController@refresh');
    Route::post('me', 'Api\AuthController@me');

});

Route::group(['middleware' => ['apiJwt']], function(){

    // auth routes
    Route::prefix('auth')->group(function () {
        Route::post('logout', 'Api\AuthController@logout');
    
    });

    Route::get('users', 'Api\UserController@index');
    Route::get('products', 'Api\ProductController@index')->name('api.products');
    Route::get('products/{id}', 'Api\ProductController@show');
    Route::post('products/store', 'Api\ProductController@store');
    Route::put('products/{id}/update', 'Api\ProductController@update');
    Route::delete('products/{id}/destroy', 'Api\ProductController@destroy');
});

