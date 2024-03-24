<?php

use Illuminate\Support\Facades\Route;

// Route::get('log-data', 'LogDataController@index');

Route::group([
    'module'     => 'LogData',
    'prefix'     => 'broker',
    'middleware' => ['web', 'auth'],
    'as'         => 'broker-application-log.'
], function() {
    Route::get('application-log', 'LogDataController@index')
        // ->middleware("can:broker-application-log-list")
        ->name('broker-application-log');
});
