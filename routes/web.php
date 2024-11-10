<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Posts;

Route::get('/', function () {
    return view('home', ['title' => 'Home age']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About age']);
});
Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Page','posts' => Posts::all()
    ]); // Menyisipkan variabel 'title' ke dalam view
});

// Contoh controller
Route::get('/blog/{post:slug}', function (Posts $post) {
    
    // $post = Posts::find($posts);

    return view('readmore', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact age']) ;
});
