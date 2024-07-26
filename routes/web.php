<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Author;

Route::get('/', function () {
    $posts = Post::where('status', 'published')->get();


    return view('home', [
        'posts' => $posts
    ]);
});

Route::get('/post/{id}', function ($id){
    $post = Post::find($id);
    $author = $post->user;

    return view('post', [
        'post' => $post,
        'author' => [
            'id' => $author->id,
            'name' => $author->name
        ]
    ]);
});

Route::get('author/{id}', function ($id){
   $author = User::find($id);

   return view('author', [
       'author' => $author
   ]);
});

Route::get('/contact', function () {
    return view('contact');
});
