<?php

Route::get('/', function(){
    SEO::setTitle('Home');
    SEO::setDescription('A software development company from Ethiopia');
    SEO::opengraph()->setUrl(URL::to('/'));
    SEO::setCanonical(URL::to('/'));
    SEO::opengraph()->addProperty('type', 'website');
    // SEO::opengraph()->addProperty('type', 'articles');
    // SEO::twitter()->setSite('@askualTech');
    return view('immigration.index');
})->name('theme.page.index');


Route::get('/about', function(){
    return view('immigration.pages.about');
})->name('theme.page.about');


Route::get('/gallery', function(){
    return view('immigration.pages.gallery');
})->name('theme.page.gallery');
Route::get('/resources', function(){
    return view('immigration.pages.resources');
})->name('theme.page.resources');


Route::get('/contact', function(){
    return view('yellowish.pages.contact');
})->name('theme.page.contact');


Route::get('/services', function(){
    return view('yellowish.pages.services');
})->name('theme.page.services');


Route::get('/products', function(){
    return view('yellowish.pages.products');
})->name('theme.page.products');


Route::get('/press', function(){
    return view('yellowish.pages.press');
})->name('theme.page.press');


Route::get('/faq', function(){
    return view('yellowish.pages.faq');
})->name('theme.page.faq');


Route::get('/privacy', function(){
    return view('yellowish.pages.privacy');
})->name('theme.page.privacy');


Route::get('/terms', function(){
    return view('yellowish.pages.terms');
})->name('theme.page.terms');


Route::get('/opensource', function(){
    return view('yellowish.pages.opensource');
})->name('theme.page.opensource');


Route::get('/img/{name}', function($name){
    // $theme = DB::table('zof-options')->where('name','theme_current')->get()[0]->value;
    // return file_get_contents(base_path('Themes/yellowish/img/'.$name));
    return response(file_get_contents(base_path('Themes/immigration/img/'.$name)), 200, [
        // 'Content-Type' => 'application/xml'
        'Content-Type' => 'image/png'
    ]);
})->name('theme.image');
// 
Route::get('/theme/css/{name}', function($name){
    return response(file_get_contents(base_path('Themes/immigration/assets/css/'.$name)), 200, [
        // 'Content-Type' => 'application/xml'
        'Content-Type' => 'text/css'
    ]);
})->name('theme.css');
Route::get('/theme/js/{name}', function($name){
    // return $name;
    return response(file_get_contents(base_path('Themes/immigration/assets/js/'.$name)), 200, [
        // 'Content-Type' => 'application/xml'
        'Content-Type' => 'application/javascript'
    ]);
})->name('theme.js');
// })->name('theme.js')->where('name', '[*]+');