<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        'header' => 'About Me',
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog',
        'header' => 'My Blog',
        'posts' => Post::all()
    ]);
});

Route::get('/blog/{post:slug}', function (Post $post) {
    return view('post', [
        'header' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
        'header' => 'Contact Me',
    ]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('blog', [
        'title' => 'Blog | ' . $user->name,
        'header' => count($user->posts) . ' Articles By ' . $user->name,
        'posts' => $user->posts
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blog', [
        'title' => 'Blog | ' . $category->name,
        'header' => count($category->posts) . ' Articles in ' . $category->name,
        'posts' => $category->posts
    ]);
});