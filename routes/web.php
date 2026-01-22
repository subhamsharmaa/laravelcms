<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/',HomeController::class);
Route::get('/blog', function () {
    return view('blog.show');
});

Route::get('/category/{category:slug}',CategoryController::class)->name('category.show');

Route::get('/post/tags/{slug}',[PostController::class,'postByTag'])->name('post.bytag');
Route::post('/comment',[CommentController::class,'store'])->name('comments.store');
Route::get('/{post:slug}',[PostController::class,'show'])->name('post.show');