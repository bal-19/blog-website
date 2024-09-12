<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'header' => 'Home Page',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'header' => 'About Us',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
        'header' => 'Contact Us',
    ]);
});

Route::resource("/posts", PostController::class);