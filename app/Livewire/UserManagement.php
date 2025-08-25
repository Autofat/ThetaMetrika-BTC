<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserManagement extends Component
{
    use WithPagination;

    public $search = '';
    public $selectedRole = '';
    public $showCreateModal = false;
    public $showEditModal = false;
    public $editingUser = null;
    
    // Form fields
    public $name;
    public $email;
    public $password;
    public $role;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
        'role' => 'required|exists:roles,name',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function createUser()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        $user->assignRole($this->role);

        $this->reset(['name', 'email', 'password', 'role', 'showCreateModal']);
        session()->flash('message', 'User created successfully!');
    }

    public function editUser($userId)
    {
        $this->editingUser = User::findOrFail($userId);
        $this->name = $this->editingUser->name;
        $this->email = $this->editingUser->email;
        $this->role = $this->editingUser->roles->first()?->name ?? '';
        $this->showEditModal = true;
    }

    public function updateUser()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->editingUser->id,
            'role' => 'required|exists:roles,name',
        ]);

        $this->editingUser->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->editingUser->syncRoles($this->role);

        $this->reset(['name', 'email', 'role', 'showEditModal', 'editingUser']);
        session()->flash('message', 'User updated successfully!');
    }

    public function deleteUser($userId)
    {
        $user = User::findOrFail($userId);
        $user->delete();
        
        session()->flash('message', 'User deleted successfully!');
    }

    public function render()
    {
        $users = User::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->when($this->selectedRole, function ($query) {
                $query->role($this->selectedRole);
            })
            ->with('roles')
            ->paginate(10);

        $roles = Role::all();

        return view('livewire.user-management', [
            'users' => $users,
            'roles' => $roles,
        ])->extends('layouts.app')->section('content');
    }
}
