<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');
