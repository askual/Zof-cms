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

Route::prefix('blog')->group(function() {
    Route::get('/', 'BlogController@index')->name('blog');
    Route::get('/post/{slug}', 'BlogController@single_post')->name('single_post');
});
Route::prefix('admin/blog')->group(function() {
    Route::get('/', 'AdminController@index')->name('blog.admin.index');
    Route::post('/post', 'AdminController@create')->name('blog.admin.create');
    Route::post('/draft', 'AdminController@draft')->name('blog.admin.draft');
    Route::get('/all', 'AdminController@all')->name('blog.admin.all');
    Route::post('/edit_post', 'AdminController@edit_post_submit')->name('blog.admin.edit_post_submit');
	Route::get('/edit_post/{id}', 'AdminController@edit_post')->name('blog.admin.edit_post');
	Route::get('/delete_post/{id}', 'AdminController@delete_post')->name('blog.admin.delete_post');
	Route::get('/toggle_post_status/{id}', 'AdminController@toggle_post_status')->name('blog.admin.toggle_post_status');
    
});
