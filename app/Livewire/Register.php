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

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
    ];

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // Assign default user role
        $user->assignRole('user');
        
        session()->flash('message', 'Registration successful! Please login.');
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.register')
            ->extends('layouts.app')
            ->section('content');
    }
}
