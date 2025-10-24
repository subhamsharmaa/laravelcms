<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/blog', function () {
    return view('blog.show');
});

Route::get('/category/{category:slug}',function(Request $request,Category $category){
    return $category;
});

Route::get('/{post:slug}',function(Request $request,Post $post){
    return $post;
});