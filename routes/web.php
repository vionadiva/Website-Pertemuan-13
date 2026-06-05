<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Page'
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'Profile Page'
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog',
        'posts' => Post::all()
    ]);
});

Route::get('/blog/{slug}', function ($slug) {

    $allPosts = Post::all();

    $post = Arr::first($allPosts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    abort_if(!$post, 404);

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});