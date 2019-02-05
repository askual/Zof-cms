<?php

Route::get('/', function(){
    SEO::setTitle('Home');
    SEO::setDescription('A software development company from Ethiopia');
    SEO::opengraph()->setUrl(URL::to('/'));
    SEO::setCanonical(URL::to('/'));
    SEO::opengraph()->addProperty('type', 'website');
    // SEO::opengraph()->addProperty('type', 'articles');
    // SEO::twitter()->setSite('@askualTech');
    return view('yellowish.index');
})->name('theme.page.index');



Route::get('/about', function(){
    return view('yellowish.static.about');
})->name('theme.page.about');


Route::get('/contact', function(){
    return view('yellowish.static.contact');
})->name('theme.page.contact');


Route::get('/services', function(){
    return view('yellowish.static.services');
})->name('theme.page.services');


Route::get('/products', function(){
    return view('yellowish.static.products');
})->name('theme.page.products');


Route::get('/press', function(){
    return view('yellowish.static.press');
})->name('theme.page.press');


Route::get('/faq', function(){
    return view('yellowish.static.faq');
})->name('theme.page.faq');


Route::get('/privacy', function(){
    return view('yellowish.static.privacy');
})->name('theme.page.privacy');


Route::get('/terms', function(){
    return view('yellowish.static.terms');
})->name('theme.page.terms');


Route::get('/opensource', function(){
    return view('yellowish.static.opensource');
})->name('theme.page.opensource');

