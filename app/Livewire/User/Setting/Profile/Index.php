<?php

namespace App\Livewire\User\Setting\Profile;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.user.setting.profile.index');
    }
}
