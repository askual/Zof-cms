<?php



Route::get('/lang', function () {
    return App::getLocale();//view('welcome');
});
Auth::routes();




Route::get('/kkkk', function(){
    return view('kkkk');
});


Route::get('/', 'PageController@index')->name('index');
Route::get('/join-us', 'PageController@join')->name('join');
Route::get('/inquiry/{name}', 'PageController@inquiry')->name('inquiry');
Route::post('/inquiry', 'PageController@enquiry_submit')->name('enquiry.submit');
// Route::get('/page/{slug}', 'PageController@all')->name('page');


// Route::get('/language/am',function(){
// 	App::setLocale('am');
// 	return redirect()->back();
// })->name('language.am');

// Route::get('/language/en',function(){
// 	App::setLocale('en');
// 	return redirect()->back();
// })->name('language.en');

Route::get('language/{locale}', function ($locale) {
    App::setLocale($locale);
    return redirect()->back();
     // __('messages.welcome');

    // return __('menu.home');
    // return App::getLocale();
    // return $locale;
    //
});



Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('/blog/image/{name}', 'PageController@blog_image')->name('blog.image');

// Route::get('/storage/{name}','MiscController@storage')->where('name', '.*')->name('storage');


Route::group(['prefix'=>'admin' ], function () {
	Route::get('/', 'AdminController@index')->name('admin.index');
	Route::get('/login', 'Auth\LoginController@admin_login_page')->name('admin.login');
	Route::post('/login', 'Auth\LoginController@admin_login_submit')->name('admin.login.submit');
	
	// Route::get('/enquiry', 'AdminController@enquiry')->name('admin.enquiry');


    // Route::get('/blog', 'AdminController@blog')->name('admin.blog');

	
    

    

    // Route::get('/media','AdminController@media')->name('admin.media');
    // Route::post('/media','AdminController@media_upload')->name('admin.media.post');
    

    Route::get('/module/status_toggle/{module}','AdminController@module_status_toggle')->name('admin.module.status_toggle');

});