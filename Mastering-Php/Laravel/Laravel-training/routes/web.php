<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Posts 
Route::get('/posts', [PostController::class, 'indexAction'])->name("posts.index");
Route::get('/posts/create', [PostController::class, 'createAction'])->name('posts.create');
// store request
Route::post('/posts', [PostController::class, 'storeAction'])->name("posts.store");
Route::get('/posts/{post}/edit', [PostController::class, 'editAction'])->name('posts.edit');
// update request
Route::put('/posts/{post}', [PostController::class, 'updateAction'])->name('posts.update');
// destroy request : 
Route::delete('/posts/{post}', [PostController::class, 'destroyAction'])->name('posts.destroy');
Route::get('/posts/{post}', [PostController::class, 'showAction'])->name("posts.show");
