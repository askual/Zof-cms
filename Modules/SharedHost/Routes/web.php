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

Route::prefix('sharedhost')->group(function() {
    Route::get('/', 'SharedHostController@index');
});
Route::group(['prefix'=>'shell'], function(){
    Route::get('/kdrop','SharedHostController@kdrop')->name('shell.kdrop');
    Route::get('/migrate/{module}','SharedHostController@migrate')->name('shell.migrate');
});
Route::get('/restart','SharedHostController@chache_del')->name('chache_del');