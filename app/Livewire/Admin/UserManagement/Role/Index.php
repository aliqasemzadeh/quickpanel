<?php

namespace App\Livewire\Admin\UserManagement\Role;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.user-management.role.index');
    }
}
