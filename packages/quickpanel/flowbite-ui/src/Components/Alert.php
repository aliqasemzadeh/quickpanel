<?php

namespace QuickPanel\FlowBiteUI\Components;

use Livewire\Component;
use Livewire\Attributes\On;

class Alert extends Component
{
    public $type = 'info';
    public $dismissible = false;
    public $title = '';
    public $message = '';
    public $icon = true;
    public $border = false;
    public $size = 'md';

    public function mount($type = 'info', $dismissible = false, $title = '', $message = '', $icon = true, $border = false, $size = 'md')
    {
        $this->type = $type;
        $this->dismissible = $dismissible;
        $this->title = $title;
        $this->message = $message;
        $this->icon = $icon;
        $this->border = $border;
        $this->size = $size;
    }

    #[On('show-alert')]
    public function showAlert($type = null, $title = null, $message = null)
    {
        if ($type) $this->type = $type;
        if ($title) $this->title = $title;
        if ($message) $this->message = $message;
    }

    public function render()
    {
        return view('flowbite-ui::components.alert');
    }
}
