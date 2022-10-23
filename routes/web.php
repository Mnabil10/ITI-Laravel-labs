<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/', function () {
    return view('welcome');
});



Route::resource('posts', PostController::class);
Route::post('comments/{postid}', [CommentController::class,'store'])->name('comments.store');
 Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
