<?php

namespace App\Livewire\Admin\UserManagement\Permission;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.user-management.permission.index');
    }
}
