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

Route::prefix('admin')->group(function() {
    Route::prefix('client')->group(function() {
        Route::get('/add','AdminController@add_client')->name('admin.client.add_client');
        Route::post('/add','AdminController@add_client_post')->name('admin.client.add_client_post');
    });
});


Route::prefix('client')->group(function() {
    Route::get('/', 'ClientController@index')->name('client.index');

    Route::get('/login', 'Auth\LoginController@client_login_page')->name('client.login');
    Route::post('/login','\Modules\Client\Http\Controllers\Auth\LoginController@client_login_submit')->name('client.login.submit');
    Route::get('/logout','Auth\LoginController@logout2')->name('client.logout');
});


Route::prefix('gcsuite')->group(function(){
    Route::get('/adminauth','GcsuiteController@adminauth');
    Route::post('/createsuperadmin','GcsuiteController@create_superadmin');
    Route::post('/request_admin','GcsuiteController@request_admin');
    Route::post('/request_admin_list','GcsuiteController@request_admin_list');
    Route::get('/approve_representative','GcsuiteController@approve_representative');

    Route::post('/add_last_word','GcsuiteController@add_last_word');
    Route::post('/last_words','GcsuiteController@last_words');

    Route::get('/unapprove_last_word','GcsuiteController@unapprove_last_word');
    
    

});
