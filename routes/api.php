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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')
    ->prefix('v1')->group(function () {

        /*
        Route::get('/users/me', function (){
            return request()->user();
        });
        */

        Route::resources([
            'products' => 'ProductController',
            'users' => 'UserController'
        ]);

        /*
        Route::resource('products', 'ProductController');
        Route::get('/products', 'ProductController@index')->name('products');
        Route::post('/products', 'ProductController@store')->name('products.store');
        Route::put('/products/{product}', 'ProductController@update')->name('products.update');
        Route::get('/products/{product}', 'ProductController@show')->name('products.show');
        Route::delete('/products/{product}', 'ProductController@destroy')->name('products.destroy');
        */
    });
