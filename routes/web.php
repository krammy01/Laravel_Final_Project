<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::view('/', 'welcome');
Route::get('/', function () {
    return redirect()->route('register');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::resource('posts', PostController::class);