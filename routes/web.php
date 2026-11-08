<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('/about', [PageController::class, 'about'])
    ->name('about');

Route::get('/dashboard', function () {
    return redirect()->route('customers.index');
})->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('customers', CustomerController::class)
        ->except(['show', 'destroy']);

    Route::resource('users', UserController::class)
        ->except(['show', 'destroy']);
});

require __DIR__ . '/auth.php';