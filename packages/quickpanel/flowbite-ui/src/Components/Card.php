<?php

namespace QuickPanel\FlowBiteUI\Components;

use Livewire\Component;
use Livewire\Attributes\On;

class Card extends Component
{
    public $padding = 'p-6';
    public $shadow = 'shadow-sm';
    public $rounded = 'rounded-lg';
    public $border = true;
    public $header = null;
    public $footer = null;
    public $collapsed = false;

    public function mount($padding = 'p-6', $shadow = 'shadow-sm', $rounded = 'rounded-lg', $border = true, $header = null, $footer = null, $collapsed = false)
    {
        $this->padding = $padding;
        $this->shadow = $shadow;
        $this->rounded = $rounded;
        $this->border = $border;
        $this->header = $header;
        $this->footer = $footer;
        $this->collapsed = $collapsed;
    }

    public function toggleCollapse()
    {
        $this->collapsed = !$this->collapsed;
        $this->dispatch('card-toggled', collapsed: $this->collapsed);
    }

    #[On('collapse-card')]
    public function collapseCard()
    {
        $this->collapsed = true;
    }

    #[On('expand-card')]
    public function expandCard()
    {
        $this->collapsed = false;
    }

    public function render()
    {
        return view('flowbite-ui::components.card');
    }
}
