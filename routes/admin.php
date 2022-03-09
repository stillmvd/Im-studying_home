<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::view('/', 'admin.index');
    
    Route::get('posts', [PostController::class, 'index'])->name('admin.posts');
    Route::get('posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('admin.posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('posts', [PostController::class, 'delete'])->name('admin.posts.delete');
});