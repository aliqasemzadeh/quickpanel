@props([
    'padding' => 'p-6',
    'shadow' => 'shadow-sm',
    'rounded' => 'rounded-lg',
    'border' => true,
    'header' => null,
    'footer' => null
])

@php
    $baseClasses = 'bg-white dark:bg-gray-800';
    $borderClasses = $border ? 'border border-gray-200 dark:border-gray-700' : '';
    $classes = $baseClasses . ' ' . $padding . ' ' . $shadow . ' ' . $rounded . ' ' . $borderClasses;
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if($header)
        <div class="mb-4 pb-4 border-b border-gray-200 dark:border-gray-700">
            {{ $header }}
        </div>
    @endif
    
    <div class="card-body">
        {{ $slot }}
    </div>
    
    @if($footer)
        <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-700">
            {{ $footer }}
        </div>
    @endif
</div>
