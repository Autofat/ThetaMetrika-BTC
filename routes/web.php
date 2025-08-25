<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\Welcome;
use App\Livewire\Dashboard;
use App\Livewire\UserManagement;

Route::get('/', Welcome::class)->name('home');

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)
        ->name('dashboard')
        ->middleware(\Spatie\Permission\Middleware\RoleMiddleware::class . ':admin|superadmin');
    Route::get('/user-management', UserManagement::class)
        ->name('user-management')
        ->middleware(\Spatie\Permission\Middleware\RoleMiddleware::class . ':admin|superadmin');
});
