<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public $activeUsers;
    public $totalUsers;
    public $admins;
    public $superadmins;

    public function mount()
    {
        $this->activeUsers = User::whereNotNull('email_verified_at')->count();
        $this->totalUsers = User::count();
        $this->admins = User::role('admin')->count();
        $this->superadmins = User::role('superadmin')->count();
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.dashboard')
            ->extends('layouts.app')
            ->section('content');
    }
}
