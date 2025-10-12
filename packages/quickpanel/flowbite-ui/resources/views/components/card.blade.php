@props([
    'padding' => 'p-6',
    'shadow' => 'shadow-sm',
    'rounded' => 'rounded-lg',
    'border' => true,
    'header' => null,
    'footer' => null,
    'collapsed' => null,
    'variant' => 'default'
])

@php
    $baseClasses = 'bg-white dark:bg-gray-800';

    $variantClasses = [
        'default' => 'bg-white dark:bg-gray-800',
        'elevated' => 'bg-white dark:bg-gray-800 shadow-lg dark:shadow-gray-900/20',
        'outlined' => 'bg-white dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700',
        'filled' => 'bg-gray-50 dark:bg-gray-700',
        'glass' => 'bg-white/80 dark:bg-gray-800/80 backdrop-blur-sm'
    ];

    $shadowClasses = [
        'none' => '',
        'sm' => 'shadow-sm dark:shadow-gray-900/20',
        'md' => 'shadow-md dark:shadow-gray-900/25',
        'lg' => 'shadow-lg dark:shadow-gray-900/30',
        'xl' => 'shadow-xl dark:shadow-gray-900/40',
        '2xl' => 'shadow-2xl dark:shadow-gray-900/50'
    ];

    $borderClasses = $border ? 'border border-gray-200 dark:border-gray-700' : '';
    $classes = $variantClasses[$variant] . ' ' . $padding . ' ' . $shadowClasses[$shadow] . ' ' . $rounded . ' ' . $borderClasses;
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if($header)
        <div class="mb-4 pb-4 border-b border-gray-200 dark:border-gray-700 rtl:border-r-0 rtl:border-l-0">
            <div class="flex items-center justify-between rtl:flex-row-reverse">
                <div class="flex-1 rtl:text-right">
                    {{ $header }}
                </div>
                @if($collapsed !== null)
                    <button
                        wire:click="toggleCollapse"
                        class="ml-4 rtl:ml-0 rtl:mr-4 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 transition-colors duration-200 rtl:float-left"
                        aria-label="{{ $collapsed ? 'Expand' : 'Collapse' }}"
                    >
                        <svg class="w-4 h-4 transform transition-transform duration-200 {{ $collapsed ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                @endif
            </div>
        </div>
    @endif

    @if(!$collapsed)
        <div class="card-body text-gray-900 dark:text-gray-50">
            {{ $slot }}
        </div>
    @endif

    @if($footer)
        <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-700 rtl:border-r-0 rtl:border-l-0">
            <div class="text-gray-600 dark:text-gray-300 rtl:text-right">
                {{ $footer }}
            </div>
        </div>
    @endif
</div>
