<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/', function () {
    return view('welcome');
});



Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create',[PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{post}/edit',[PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts', [PostController::class, 'update'])->name('posts.update');

Route::get('posts/{post}/remove',[PostController::class, 'remove'])->name('posts.remove');
Route::delete('/posts', [PostController::class, 'delete'])->name('posts.delete');
