<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route('login');
});

Route::get('/dashboard', function () {
    return view('members.dash');
})->name('dashboard');


Route::get('/login', function () {
    return view('components.login');
})->name('login');


Route::prefix('dashboard')->group(function () {
    Route::resource('categories', CategoryController::class)->except('show');
    Route::resource('members', UserController::class)->except('show');
});
