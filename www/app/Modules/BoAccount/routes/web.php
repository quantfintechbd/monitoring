<?php 

use Illuminate\Support\Facades\Route; 

Route::group([
    'module'     => 'BoAccount', 
    'prefix'     => 'bo-account',
    'middleware' => ['web', 'auth'], 
    'as'         => 'bo-account.'
], function() { 

    /* 
    * AJAX REQUEST  
    * ----------------------------------------------------- */
    Route::get('bank-dropdown', 'AjaxController@bankDropdown')
        ->name('bank-dropdown'); 
    Route::get('bank-branch-dropdown/{bank_id?}', 'AjaxController@bankBranchDropdown')
        ->name('bank-branch-dropdown'); 
    Route::get('bank-routing-dropdown/{branch_id?}', 'AjaxController@bankRoutingDropdown')
        ->name('bank-routing-dropdown'); 

 
    /* 
    * USERS  
    * ----------------------------------------------------- */
    Route::get('user', 'BoUserController@index')
        ->middleware("can:bo-user-list")
        ->name('user'); 
    Route::get('user/create', 'BoUserController@create')
        ->middleware("can:bo-user-create")
        ->name('user.create');
    Route::post('user/store', 'BoUserController@store')
        ->middleware("can:bo-user-create")
        ->name('user.store');
    Route::get('user/{id}/edit', 'BoUserController@edit')
        ->middleware("can:bo-user-update")
        ->name('user.edit');
    Route::put('user/{id}/update', 'BoUserController@update')
        ->middleware("can:bo-user-update")
        ->name('user.update'); 
    
    /* 
    * PROFILE  
    * ----------------------------------------------------- */
    Route::get('user/{id}/profile-edit', 'BoProfileController@index')
        ->middleware("can:bo-user-profile-edit")
        ->name('user.profile-edit'); 
    Route::get('user/{id}/profile', 'BoProfileController@view')
        ->middleware("can:bo-user-profile")
        ->name('user.profile'); 
    Route::post('account-holder/store', 'BoProfileController@saveAccountHolder')
        ->middleware("can:bo-account-holder")
        ->name('account-holder.store'); 
    Route::post('bank-information/store', 'BoProfileController@saveBankAccount')
        ->middleware("can:bo-bank-information")
        ->name('bank-information.store'); 
    Route::post('authorize-information/store', 'BoProfileController@saveAuthorizeInformation')
        ->middleware("can:bo-authorize-information")
        ->name('authorize-information.store');
    Route::post('nominee-information/store', 'BoProfileController@saveNomineeInformation')
        ->middleware("can:bo-nominee-information")
        ->name('nominee-information.store'); 
    Route::post('document/store', 'BoProfileController@saveDocument')
        ->middleware("can:bo-document")
        ->name('document.store'); 
    /* 
    * BO FILE   
    * ----------------------------------------------------- */
    Route::get('download/{id}/bo-file', 'BoProfileController@downloadBoFile')
    ->middleware("can:download-bo-file")
    ->name('download.bo-file');



});