<?php

use Illuminate\Support\Facades\Route;


Route::group([
    'module'     => 'Auth', 
    'middleware' => ['web']
], function() {
    Route::get('/', 'AuthController@login');

    // login
    Route::get('login', 'AuthController@login')->name("login");
    Route::post('login/auth', 'AuthController@auth')->name("login.auth");
    // registration
    Route::get('register', 'AuthController@register')->name("register");
    Route::post('register', 'AuthController@saveUser')->name("register.save");
    // otp
    Route::get('otp/verify', 'AuthOtpController@otp')->name("otp.verify");
    Route::post('otp/auth', 'AuthOtpController@auth')->name("otp.auth");
    Route::get('otp/success', 'AuthOtpController@success')->name("otp.success");
});

// after login
Route::group([
    'module'     => 'Auth', 
    'prefix'     => 'auth',
    'middleware' => ['web', 'auth'], 
    'as'         => 'auth.'
], function() {
    Route::get('logout', 'AuthController@logout')->name("logout"); 
});