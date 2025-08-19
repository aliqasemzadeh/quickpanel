<?php

namespace App\Livewire\Admin\UserManagement\User;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Index extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.user-management.user.index');
    }
}
