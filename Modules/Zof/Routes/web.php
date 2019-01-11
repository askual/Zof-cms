<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('zof')->group(function() {
    Route::get('/', 'ZofController@index');
});

Route::group(['prefix'=>'admin' ], function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/module/status_toggle/{module}','AdminController@module_status_toggle')->name('admin.module.status_toggle');
    Route::get('/module/update/{module}','AdminController@module_update')->name('admin.module.update');
});