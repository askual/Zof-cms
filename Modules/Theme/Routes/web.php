<?php

// List of essential pages
use Modules\Zof\Entities\Option;
$o = Option::where('name','theme_current')->first()->value;
include_once base_path('Themes/'.$o.'/config/urls.php');

Route::get('/404', 'PageController@fourofour')->name('theme.page.404');
Route::get('/500', 'PageController@fiveoo')->name('theme.page.500');




Route::get('/crawl','PageController@crawl');

Route::prefix('page')->group(function() {
    // Route::get('/page/{slug}', function($slug){
    //     return "sss";
    // })->name('theme.static_page');
    // Route::get('/pages/{}', function(){
    //     return "sss";
    // })->name('theme.static_page2');
    Route::get('/s/{slug}', 'ThemeController@static_page')->name('theme.static_page');
    Route::get('/d/{slug}', 'ThemeController@dynamic_page')->name('theme.dynamic_page');
});


Route::prefix('admin')->group(function() {
    Route::get('/404', 'AdminController@fourofour')->name('admin.theme.page.404');
    Route::prefix('theme')->group(function() {
        Route::get('/setting', 'AdminController@setting')->name('admin.theme.setting');
        Route::post('/setting', 'AdminController@setting_edit')->name('admin.theme.setting.post');

        Route::get('/analytics', 'AdminController@analytics')->name('admin.theme.analytics');

        Route::post('/setting_theme', 'AdminController@setting_theme_edit')->name('admin.theme.theme_setting.post');

        Route::get('/install/{theme}', 'AdminController@theme_install')->name('admin.theme.theme_install');
        
        Route::get('/pages', 'AdminController@pages')->name('admin.theme.pages');
        Route::post('/page', 'AdminController@page_create')->name('admin.theme.page.create');
        Route::post('/page/edit', 'AdminController@page_edit')->name('admin.theme.page_edit');
    });
});

    