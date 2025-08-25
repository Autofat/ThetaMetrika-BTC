<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;
    public $remember = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            session()->regenerate();
            
            $user = Auth::user();
            
            // Redirect based on user role
            if ($user->hasAnyRole(['admin', 'superadmin'])) {
                return redirect()->intended(route('dashboard'));
            }
            
            return redirect()->intended(route('home'));
        }

        $this->addError('email', 'The provided credentials do not match our records.');
    }

    public function render()
    {
        return view('livewire.login')
            ->extends('layouts.app')
            ->section('content');
    }
}
