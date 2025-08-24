<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('message', 'Login successful!');
            return redirect()->route('dashboard');
        } else {
            session()->flash('error', 'Invalid credentials. Please try again.');
        }
    }

    public function render()
    {
        return view('components.auth.login')
            ->extends('layouts.app')
            ->section('content');
    }
}
