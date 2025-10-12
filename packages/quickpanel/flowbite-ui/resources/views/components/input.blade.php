@props([
    'type' => 'text',
    'size' => 'md',
    'color' => 'gray',
    'disabled' => false,
    'error' => false,
    'label' => null,
    'placeholder' => null,
    'required' => false
])

@php
    $baseClasses = 'block w-full rounded-lg border text-sm transition-colors duration-200 focus:ring-2 focus:outline-none';
    
    $sizeClasses = [
        'sm' => 'p-2.5',
        'md' => 'p-2.5',
        'lg' => 'p-3'
    ];
    
    $colorClasses = [
        'gray' => [
            'normal' => 'bg-gray-50 border-gray-300 text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500',
            'error' => 'bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:border-red-500 focus:ring-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500'
        ],
        'blue' => [
            'normal' => 'bg-blue-50 border-blue-300 text-blue-900 focus:border-blue-500 focus:ring-blue-500 dark:bg-blue-700 dark:border-blue-600 dark:placeholder-blue-400 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500',
            'error' => 'bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:border-red-500 focus:ring-red-500 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500'
        ]
    ];
    
    $inputClasses = $baseClasses . ' ' . $sizeClasses[$size];
    
    if ($error) {
        $inputClasses .= ' ' . $colorClasses[$color]['error'];
    } else {
        $inputClasses .= ' ' . $colorClasses[$color]['normal'];
    }
    
    if ($disabled) {
        $inputClasses .= ' opacity-50 cursor-not-allowed';
    }
@endphp

<div class="mb-4">
    @if($label)
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            {{ $label }}
            @if($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif
    
    <input 
        type="{{ $type }}"
        {{ $attributes->merge(['class' => $inputClasses]) }}
        @if($placeholder) placeholder="{{ $placeholder }}" @endif
        @if($disabled) disabled @endif
        @if($required) required @endif
        @if($value !== '') value="{{ $value }}" @endif
        wire:model.live="value"
    />
    
    @if($error && is_string($error))
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $error }}</p>
    @endif
</div>
