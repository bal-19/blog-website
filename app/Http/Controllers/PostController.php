<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(Request $request): View
    {
        $title = 'Blog';
        $header = 'Our Blog';
        $posts = Post::filter($request->only(['search', 'category', 'author']))->latest()->paginate(10)->withQueryString();

        return view('posts.index', compact('title', 'header', 'posts'));
    }

    public function show(Post $post): View
    {
        $header = 'Single Post';

        return view('posts.show', compact('header', 'post'));
    }
}