<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk Dashboard Pengguna
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route Admin Dashboard
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->middleware(['auth', \App\Http\Middleware\EnsureUserIsAdmin::class])  // Menambahkan middleware admin
    ->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');


require __DIR__.'/auth.php';
