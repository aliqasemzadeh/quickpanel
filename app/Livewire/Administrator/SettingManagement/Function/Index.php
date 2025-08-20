<?php

namespace App\Livewire\Administrator\SettingManagement\Function;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.administrator')]
    public function render()
    {
        return view('livewire.administrator.setting-management.function.index');
    }
}
