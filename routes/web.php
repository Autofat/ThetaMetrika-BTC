<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Login;
use App\Livewire\Register;

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

Route::middleware(['auth', 'role:admin,superadmin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('components.dashboard.dashboard');
    })->name('dashboard');
});
