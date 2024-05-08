<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route('login');
});

Route::get('/dashboard', function () {
    return view('members.dash');
})
    ->name('dashboard')
    ->middleware('auth');

Route::get('login', [LoginController::class, 'login'])
    ->name('login')
    ->middleware('guest');
Route::post('login', [LoginController::class, 'handle'])->name('handle')
    ->middleware('guest');
Route::post('logout', [LoginController::class, 'logout'])->name('logout')
    ->middleware('auth');

Route::prefix('dashboard')->group(function () {
    Route::resource('categories', CategoryController::class)->except('show')
        ->middleware('auth');
    Route::resource('members', UserController::class)->except('show')
        ->middleware('auth');
});
