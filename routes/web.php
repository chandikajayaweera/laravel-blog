<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::where('status', 'published')->get();


    return view('home', [
        'posts' => $posts
    ]);
});

Route::get('/post/{id}', function ($id){
    $post = Post::find($id);

    return view('post', [
        'post' => $post
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
