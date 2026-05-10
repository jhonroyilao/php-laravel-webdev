<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CalculateController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
})->name('homeAlias');

Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('/form', [FormController::class, 'index'])->name('form');

Route::group(['prefix' => 'user'], function () {
    Route::get('{id}/{name}', [UserController::class, 'userInputParam'])->name('userDisplay');
    Route::get('edit/{id}/{name}', [UserController::class, 'userEdit'])->name('userEdit');
    Route::get('{id}', [UserController::class, 'userInfo'])->name('userInfo');
    Route::get('delete', [UserController::class, 'index'])->name('userDelete');
    
    Route::get('calculate/{num1}/{num2}', [CalculateController::class, 'index'])->name('calculate');
    Route::post('add',[UserController::class, 'addUser'])
    ->name('addUser');});


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::fallback(function () {
    return response()->view('fallback', [], 404);
});


