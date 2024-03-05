<?php

use App\Modules\Main\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route; 
use Opcodes\LogViewer\Http\Controllers\IndexController;

// log-viewer 
Route::get('/log-viewer', [IndexController::class, '__invoke'])->middleware('can:log-viewer');

// all main module routes
Route::group([
    'module'     => 'Main', 
    'prefix'     => 'dashboard',
    'middleware' => ['web', 'auth'], 
    'as'         => 'dashboard.'
], function() {

    // dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('home');
 
    /* 
    * USERS  
    * ----------------------------------------------------- */
    Route::get('user', 'UserController@index')
        ->middleware("can:user-list")
        ->name('user');
    Route::get('user/create', 'UserController@create')
        ->middleware("can:user-create")
        ->name('user.create');
    Route::post('user/store', 'UserController@store')
        ->middleware("can:user-create")
        ->name('user.store');
    Route::get('user/{id}/edit', 'UserController@edit')
        ->middleware("can:user-update")
        ->name('user.edit');
    Route::put('user/{id}/update', 'UserController@update')
        ->middleware("can:user-update")
        ->name('user.update');
    Route::get('user/{id}/pretend', 'UserController@pretendLogin')
        ->middleware("can:user-pretend-login")
        ->name('user.pretend-login');
    Route::get('user/{id}/reset-password', 'UserController@resetPassword')
        ->middleware("can:user-reset-password")
        ->name('user.reset-password');
    Route::post('user/{id}/reset-password', 'UserController@restPasswordUpdate')
        ->middleware("can:user-reset-password")
        ->name('user.reset-password');
        
    // profile
    Route::get('user/profile', 'UserController@profile')
        ->name('user.profile');
    Route::get('user/profile-edit', 'UserController@profileEdit')
        ->name('user.profile.edit');
    Route::put('user/{id}/profile-update', 'UserController@update')
        ->name('user.profile.update');
    Route::get('user/profile/change-password', 'UserController@changePassword')
        ->name('user.profile.change-password');
    Route::post('user/profile/password-update', 'UserController@passwordUpdate')
        ->name('user.profile.password-update');

    // user login session
    Route::get('user/session', 'UserSessionController@index')
        ->middleware('can:user-session')
        ->name('user.session');
        

    /* 
    * WHITE LISTED IP  
    * ----------------------------------------------------- */
    // Route::get('user-whitelisted-ip', 'UserWhiteListedIpController@index')
    //     ->middleware("can:user-whitelisted-ip")
    //     ->name('user-whitelisted-ip');
    // Route::get('user-whitelisted-ip/create', 'UserWhiteListedIpController@create')
    //     ->middleware("can:user-whitelisted-ip-create")
    //     ->name('user-whitelisted-ip.create');
    // Route::post('user-whitelisted-ip/store', 'UserWhiteListedIpController@store')
    //     ->middleware("can:user-whitelisted-ip-create")
    //     ->name('user-whitelisted-ip.store');
    // Route::get('user-whitelisted-ip/{id}/edit', 'UserWhiteListedIpController@edit')
    //     ->middleware("can:user-whitelisted-ip-update")
    //     ->name('user-whitelisted-ip.edit');
    // Route::put('user-whitelisted-ip/{id}/update', 'UserWhiteListedIpController@update')
    //     ->middleware("can:user-whitelisted-ip-update")
    //     ->name('user-whitelisted-ip.update');

        
    /* 
    * ROLES  
    * ----------------------------------------------------- */
    // modules
    Route::get('role/module', 'RoleController@module')
    ->middleware("can:module-list")
    ->name('role.module');
    Route::get('role/module/create', 'RoleController@createModule')
    ->middleware("can:module-create")
    ->name('role.module.create');
    Route::post('role/module', 'RoleController@storeModule')
    ->middleware("can:module-create")
    ->name('role.module.store');
    Route::get('role/module/{id}/edit', 'RoleController@editModule')
    ->middleware("can:module-update")
    ->name('role.module.edit');
    Route::put('role/module/{id}', 'RoleController@updateModule')
    ->middleware("can:module-update")
    ->name('role.module.update');

    // permissions
    Route::get('role/permission', 'RoleController@permission')
    ->middleware("can:permission-list")
    ->name('role.permission');
    Route::get('role/permission/create', 'RoleController@createPermission')
    ->middleware("can:permission-create")
    ->name('role.permission.create');
    Route::post('role/permission', 'RoleController@storePermission')
    ->middleware("can:permission-create")
    ->name('role.permission.store');
    Route::get('role/permission/{id}/edit', 'RoleController@editPermission')
    ->middleware("can:permission-update")
    ->name('role.permission.edit');
    Route::put('role/permission/{id}', 'RoleController@updatePermission')
    ->middleware("can:permission-update")
    ->name('role.permission.update');

    // role
    Route::get('role', 'RoleController@role')
    ->middleware("can:role-list")
    ->name('role');
    Route::get('role/has-permission/create', 'RoleController@createRole')
    ->middleware("can:role-create")
    ->name('role.has-permission.create');
    Route::post('role/has-permission', 'RoleController@storeRole')
    ->middleware("can:role-create")
    ->name('role.has-permission.store');
    Route::get('role/has-permission/{id}/edit', 'RoleController@editRole')
    ->middleware("can:role-update")
    ->name('role.has-permission.edit');
    Route::put('role/has-permission', 'RoleController@updateRole')
    ->middleware("can:role-update")
    ->name('role.has-permission.update');

    // activity log
    Route::get('activity-log', 'ActivityLogController@index')
    ->middleware("can:activity-log")
    ->name('log.activity-log');
    
});