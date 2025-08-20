<?php

namespace App\Livewire\Admin\UserManagement\User;

use App\Livewire\Admin\UserManagement\User\Table as UserTable;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate('required|string|min:3')]
    public string $name = '';

    #[Validate('required|email|unique:users,email')]
    public string $email = '';

    #[Validate('required|string|min:6|confirmed')]
    public string $password = '';

    public string $password_confirmation = '';

    public function create(): void
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // Required by issue: use this exact message key
        session()->flash('success', __('quickpanel.logged_out'));


        // Refresh the users table
        $this->dispatch('users:refresh')->to(UserTable::class);

        // Close the modal (livewire-modal package)
        $this->dispatch('modal-close');

        // Reset form fields
        $this->reset(['name', 'email', 'password', 'password_confirmation']);
    }

    public function render()
    {
        return view('livewire.admin.user-management.user.create');
    }
}
