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

Route::namespace('Jwt')->group(function () {


    Route::middleware('guest:api')->group(function () {
        Route::post('login', 'LoginController@index')->name('login');
    });

    Route::middleware('auth:api')->group(function () {
        Route::get('me', 'MeController@index')->name('me');
        Route::post('register', 'RegisterController@index')->name('register');
    });

});

Route::namespace('Oauth')->prefix('oauth')->group(function () {
    Route::prefix('twitter')->group(function () {
        Route::get('redirect', 'TwitterController@redirect');
        Route::get('callback', 'TwitterController@callback');
    });
});
