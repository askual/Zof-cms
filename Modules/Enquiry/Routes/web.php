<?php

// Route::prefix('enquiry')->group(function() {
//     Route::get('/', 'EnquiryController@index');
// });

Route::prefix('enquiry')->group(function() {
    // Route::get('/', 'EnquiryController@index')->name('enquiry');
    Route::get('/page/{name}', 'EnquiryController@show_page')->name('enquiry.show');
    Route::post('/submit', 'EnquiryController@user_submit')->name('enquiry.submit');
});
Route::prefix('admin/enquiry')->group(function() {
    Route::get('/', 'AdminController@index')->name('enquiry.admin.index');
    // Route::post('/post', 'AdminController@create')->name('blog.admin.create');
    // Route::post('/draft', 'AdminController@draft')->name('blog.admin.draft');
    Route::get('/all', 'AdminController@all')->name('enquiry.admin.all');
    // Route::post('/edit_post', 'AdminController@edit_post_submit')->name('blog.admin.edit_post_submit');
	// Route::get('/edit_post/{id}', 'AdminController@edit_post')->name('blog.admin.edit_post');
	// Route::get('/delete_post/{id}', 'AdminController@delete_post')->name('blog.admin.delete_post');
	// Route::get('/toggle_post_status/{id}', 'AdminController@toggle_post_status')->name('blog.admin.toggle_post_status');
    
});