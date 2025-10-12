@props([
    'variant' => 'solid',
    'color' => 'blue',
    'size' => 'md',
    'disabled' => false,
    'type' => 'button'
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-medium rounded-lg text-sm focus:ring-4 focus:outline-none transition-colors duration-200';
    
    $sizeClasses = [
        'xs' => 'px-2.5 py-1.5 text-xs',
        'sm' => 'px-3 py-2 text-sm',
        'md' => 'px-4 py-2.5 text-sm',
        'lg' => 'px-5 py-3 text-base',
        'xl' => 'px-6 py-3.5 text-base'
    ];
    
    $colorClasses = [
        'blue' => [
            'solid' => 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800',
            'outline' => 'text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white dark:focus:ring-blue-800',
            'ghost' => 'text-blue-700 hover:bg-blue-100 focus:ring-blue-300 dark:text-blue-500 dark:hover:bg-blue-500/10 dark:focus:ring-blue-800'
        ],
        'gray' => [
            'solid' => 'text-white bg-gray-800 hover:bg-gray-900 focus:ring-gray-300 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800',
            'outline' => 'text-gray-900 border border-gray-300 hover:bg-gray-100 focus:ring-gray-300 dark:border-gray-600 dark:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800',
            'ghost' => 'text-gray-900 hover:bg-gray-100 focus:ring-gray-300 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-800'
        ],
        'green' => [
            'solid' => 'text-white bg-green-700 hover:bg-green-800 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800',
            'outline' => 'text-green-700 border border-green-700 hover:bg-green-700 hover:text-white focus:ring-green-300 dark:border-green-500 dark:text-green-500 dark:hover:bg-green-500 dark:hover:text-white dark:focus:ring-green-800',
            'ghost' => 'text-green-700 hover:bg-green-100 focus:ring-green-300 dark:text-green-500 dark:hover:bg-green-500/10 dark:focus:ring-green-800'
        ],
        'red' => [
            'solid' => 'text-white bg-red-700 hover:bg-red-800 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800',
            'outline' => 'text-red-700 border border-red-700 hover:bg-red-700 hover:text-white focus:ring-red-300 dark:border-red-500 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:ring-red-800',
            'ghost' => 'text-red-700 hover:bg-red-100 focus:ring-red-300 dark:text-red-500 dark:hover:bg-red-500/10 dark:focus:ring-red-800'
        ]
    ];
    
    $classes = $baseClasses . ' ' . $sizeClasses[$size] . ' ' . $colorClasses[$color][$variant];
    
    if ($disabled) {
        $classes .= ' opacity-50 cursor-not-allowed';
    }
@endphp

<button 
    type="{{ $type }}"
    {{ $attributes->merge(['class' => $classes]) }}
    @if($disabled) disabled @endif
>
    {{ $slot }}
</button>
