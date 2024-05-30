<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'login'])->name('login');


Route::get('register', [RegisterController::class, 'index']);
Route::post('register', [RegisterController::class, 'register'])->name('register');



Route::prefix('posts')->middleware('auth')->group(function(){

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/', [PostController::class, 'index']);
    Route::get('create/', [PostController::class, 'create']);
    Route::post('/', [PostController::class, 'store']);
    Route::get('edit/{id}', [PostController::class, 'edit']);
    Route::put('update/{id}', [PostController::class, 'update']);
    Route::put('delete/{id}', [PostController::class, 'delete']);

});