<?php

namespace App\Livewire\User\Setting\Profile;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Index extends Component
{
    public string $name = '';
    public string $email = '';

    // Delete confirmation modal state and password input
    public bool $confirmingDeletion = false;
    public string $delete_password = '';

    public function mount(): void
    {
        $user = Auth::user();
        if ($user) {
            $this->name = (string) $user->name;
            $this->email = (string) $user->email;
        } else {
            // No authenticated user; redirect to login
            redirect()->route('login')->send();
        }
    }

    protected function rules(): array
    {
        $userId = Auth::id();
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($userId),
            ],
            'delete_password' => ['nullable', 'string'],
        ];
    }

    public function update(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore(Auth::id()),
            ],
        ]);

        $user = Auth::user();
        if (! $user) {
            Toaster::error(__('quickpanel.not_authenticated') ?? 'Not authenticated.');
            redirect()->route('login')->send();
            return;
        }

        // If email changed, you may want to reset verification. Keeping simple unless required.
        $emailChanged = $validated['email'] !== $user->email;

        $user->name = $validated['name'];
        $user->email = $validated['email'];

        // Optionally: if ($emailChanged) { $user->email_verified_at = null; }

        $user->save();

        Toaster::success(__('quickpanel.updated_at') ?? __('quickpanel.update') ?? 'Updated');
    }

    public function openDeleteModal(): void
    {
        $this->resetValidation(['delete_password']);
        $this->delete_password = '';
        $this->confirmingDeletion = true;
    }

    public function closeDeleteModal(): void
    {
        $this->confirmingDeletion = false;
    }

    public function deleteAccount(): void
    {
        // Validate that password is provided
        $this->validate([ 'delete_password' => ['required', 'string'] ]);

        $user = Auth::user();
        if (! $user) {
            Toaster::error(__('quickpanel.invalid_current_password'));
            redirect()->route('login')->send();
            return;
        }

        if (! Hash::check($this->delete_password, $user->password)) {
            Toaster::error(__('quickpanel.invalid_current_password'));
            return;
        }

        // Log out the user before deletion to avoid stale session issues
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        // Delete the account
        try {
            $user->delete();
        } catch (\Throwable $e) {
            // If soft deletes or constraints fail, show an error
            Toaster::error(__('quickpanel.not_translated') ?? 'Unable to delete account.');
            return;
        }

        // Close modal and redirect
        $this->confirmingDeletion = false;
        Toaster::success(__('quickpanel.user_deleted') ?? 'Account deleted.');

        redirect()->route('home')->send();
    }

    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.user.setting.profile.index');
    }
}
