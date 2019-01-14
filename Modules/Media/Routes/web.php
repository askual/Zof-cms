<?php





Route::prefix('media')->group(function() {
    // Route::get('/', 'MediaController@index');
});
Route::prefix('admin/media')->group(function() {
    Route::get('/file', 'AdminController@file_page')->name('media.admin.file');
    Route::get('/image', 'AdminController@image_page')->name('media.admin.image');
});


Route::get('/photos/{name}','MediaController@storage')->where('name', '.*')->name('storage.photos');
Route::get('/files/{name}','MediaController@files')->where('name', '.*')->name('storage.files');