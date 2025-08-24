<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{   
        public $name;
        public $email;
        public $password;
        public $password_confirmation;
        public $role = 'user';

    public function register()
    {

        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $user->assignRole('user');
        session()->flash('message', 'Registration successful! Please login.');
        return redirect()->route('login');

    }

    public function render()
    {
        return view('components.auth.register')
            ->extends('layouts.app')
            ->section('content');
    }
}
