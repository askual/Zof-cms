<?php



Route::prefix('alensys')->group(function() {
    // Route::get('/', 'AlenSysController@index');
});

Route::prefix('admin/alensys')->group(function() {
    Route::get('/members', 'AdminController@members')->name('alensys.admin.members');
    Route::get('/members/{id}', 'AdminController@member_single')->name('alensys.admin.members.single');
    Route::post('/members/add', 'AdminController@members_add')->name('alensys.admin.members.add');
    Route::get('/payment', 'AdminController@payment')->name('alensys.admin.payment');
});