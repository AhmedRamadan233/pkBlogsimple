<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categories', [HomeController::class, 'categoryIndex'])->name('categories.index');


Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'login'])->name('login');


Route::get('register', [RegisterController::class, 'index']);
Route::post('register', [RegisterController::class, 'register'])->name('register');


Route::prefix('posts')->middleware('auth')->group(function () {

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/', [PostController::class, 'index'])->name('post.index');
    Route::get('create/', [PostController::class, 'create'])->name('posts.create');
    Route::post('/store', [PostController::class, 'store'])->name('posts.store');
    Route::get('show/{id}', [PostController::class, 'show'])->name('posts.show');
    Route::get('edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('update/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('delete/{id}', [PostController::class, 'delete'])->name('posts.destroy');
});
