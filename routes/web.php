<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\CreateRequestByUserController;
use App\Http\Controllers\UsersRequestsController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'index')->name('index');
Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
Route::view('service', 'service')->name('service');
Route::view('success', 'success')->name('success');

Route::view('errors', 'errors')->name('getError');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('admin-panel', [AdminPanelController::class, 'getAdminPanel'])->name('adminPanel')
//    ->middleware(['auth','verified'])
    ->name('admin-panel');

Route::get('{admin-panel}/usersRequests', [UsersRequestsController::class, 'getUsersRequests'])
    ->middleware(['auth','verified'])
    ->name('users-requests');

Route::post('create-request', [CreateRequestByUserController::class, 'index'])->name('createRequest');

require __DIR__.'/auth.php';
