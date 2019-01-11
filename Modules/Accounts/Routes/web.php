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
Route::get('/logout','Auth\LoginController@logout2')->name('logout');
Route::get('login/{provider}','Auth\SocialAccountController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\SocialAccountController@handleProviderCallback');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::prefix('accounts')->group(function() {
    Route::get('/', 'AccountsController@index');
});

Route::group(['prefix'=>'admin' ], function () {
	Route::get('/login', 'Auth\LoginController@admin_login_page')->name('admin.login');
	Route::post('/login', 'Auth\LoginController@admin_login_submit')->name('admin.login.submit');
	
	Route::prefix('accounts')->group(function() {
		Route::get('/all', 'AdminController@all');
	});

});