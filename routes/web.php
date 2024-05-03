<?php

use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('admin/dash');
})->name('dashboard');

Route::get('/dashboard/add-new-work', function () {
    return view('admin/add-new-work');
})->name('addNewWork');

Route::get('/dashboard/all-members', function () {
    return view('admin/all-members');
})->name('allMembers');

Route::get('/test', function () {
    return 'test';
});
