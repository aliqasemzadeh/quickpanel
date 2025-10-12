<?php

namespace QuickPanel\FlowBiteUI\Components;

use Livewire\Component;
use Livewire\Attributes\On;

class Input extends Component
{
    public $type = 'text';
    public $size = 'md';
    public $color = 'gray';
    public $disabled = false;
    public $error = false;
    public $label = null;
    public $placeholder = null;
    public $required = false;
    public $value = '';

    protected $rules = [
        'value' => 'nullable|string|max:255',
    ];

    protected $messages = [
        'value.max' => 'This field cannot exceed 255 characters.',
    ];

    public function mount($type = 'text', $size = 'md', $color = 'gray', $disabled = false, $error = false, $label = null, $placeholder = null, $required = false, $value = null)
    {
        $this->type = $type;
        $this->size = $size;
        $this->color = $color;
        $this->disabled = $disabled;
        $this->error = $error;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->value = $value ?? '';
    }

    public function updatedValue()
    {
        $this->validate();
        $this->dispatch('input-updated', value: $this->value);
    }

    public function clear()
    {
        $this->value = '';
        $this->error = false;
    }

    #[On('clear-input')]
    public function clearInput()
    {
        $this->clear();
    }

    public function render()
    {
        return view('flowbite-ui::components.input');
    }
}
