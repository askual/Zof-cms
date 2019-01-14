<?php

// List of essential pages

Route::get('/', 'PageController@index')->name('theme.page.index');
Route::get('/about', 'PageController@about')->name('theme.page.about');
Route::get('/contact', 'PageController@contact')->name('theme.page.contact');
Route::get('/sitemap', 'PageController@sitemap')->name('theme.page.sitemap');
Route::get('/services', 'PageController@services')->name('theme.page.services');
Route::get('/products', 'PageController@products')->name('theme.page.products');
Route::get('/press', 'PageController@press')->name('theme.page.press');
Route::get('/faq', 'PageController@faq')->name('theme.page.faq');
Route::get('/privacy', 'PageController@privacy')->name('theme.page.privacy');
Route::get('/terms', 'PageController@terms')->name('theme.page.terms');
Route::get('/opensource', 'PageController@opensource')->name('theme.page.opensource');

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
    Route::prefix('theme')->group(function() {
        Route::get('/setting', 'AdminController@setting')->name('admin.theme.setting');
        Route::post('/setting', 'AdminController@setting_edit')->name('admin.theme.setting.post');
        Route::post('/setting_theme', 'AdminController@setting_theme_edit')->name('admin.theme.theme_setting.post');

        Route::get('/install/{theme}', 'AdminController@theme_install')->name('admin.theme.theme_install');
        
        Route::get('/pages', 'AdminController@pages')->name('admin.theme.pages');
        Route::post('/page', 'AdminController@page_create')->name('admin.theme.page.create');
        Route::post('/page/edit', 'AdminController@page_edit')->name('admin.theme.page_edit');
    });
});

    