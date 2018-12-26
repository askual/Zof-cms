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

// Route::prefix('theme')->group(function() {
//     Route::get('/', 'ThemeController@index');
// });
Route::prefix('page')->group(function() {
    // Route::get('/page/{slug}', function($slug){
    //     return "sss";
    // })->name('theme.static_page');
    // Route::get('/pages/{}', function(){
    //     return "sss";
    // })->name('theme.static_page2');
    
    Route::get('/static/{slug}', 'ThemeController@static_page')->name('theme.static_page');
});


Route::prefix('admin')->group(function() {
    Route::prefix('theme')->group(function() {
        Route::get('/setting', 'AdminController@setting')->name('admin.theme.setting');
        Route::post('/setting', 'AdminController@setting_edit')->name('admin.theme.setting.post');
        Route::post('/setting_theme', 'AdminController@setting_theme_edit')->name('admin.theme.theme_setting.post');
        Route::get('/pages', 'AdminController@pages')->name('admin.theme.pages');
        Route::post('/page', 'AdminController@page_create')->name('admin.theme.page.create');
        Route::post('/page/edit', 'AdminController@page_edit')->name('admin.theme.page_edit');
    });
});

    