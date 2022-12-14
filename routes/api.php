<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1', /*'middleware' => ['cors']*/], function (){
    
    Route::get('categories', 'CategoryController@index');
    Route::get('categories/{category}', 'CategoryController@show');
    Route::post('categories', 'CategoryController@store');

    Route::get('products', 'ProductController@index');
    Route::get('products/{product}', 'ProductController@show');
    Route::post('products', 'ProductController@store');

    Route::get('orders', 'OrderController@index');
    Route::get('orders/{order}', 'OrderController@show');
    Route::post('orders', 'OrderController@store');

});