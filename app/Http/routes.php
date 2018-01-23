<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('login', 'AuthController@login');
    Route::post('login', 'AuthController@aksi_login');
    Route::get('register', 'AuthController@register');
    Route::post('register', 'AuthController@aksi_register');
    Route::get('register-next', 'AuthController@register_next');
    Route::post('register-next', 'AuthController@aksi_register_next');

    Route::get('logout', function (){
        Auth::logout();
        return redirect('/auth/login');
    });
});

Route::group(['prefix' => 'account'], function () {
    Route::get('/', 'AccountController@profile');
});
