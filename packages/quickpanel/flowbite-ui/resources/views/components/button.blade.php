@props([
    'variant' => 'solid',
    'color' => 'blue',
    'size' => 'md',
    'disabled' => false,
    'type' => 'button',
    'pill' => false,
    'gradient' => false,
    'shadow' => false,
    'loading' => false,
    'icon' => null,
    'iconPosition' => 'left'
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-medium text-sm focus:ring-4 focus:outline-none transition-colors duration-200';

    // Size classes
    $sizeClasses = [
        'xs' => 'px-2.5 py-1.5 text-xs',
        'sm' => 'px-3 py-2 text-sm',
        'md' => 'px-4 py-2.5 text-sm',
        'lg' => 'px-5 py-3 text-base',
        'xl' => 'px-6 py-3.5 text-base'
    ];

    // Border radius
    $radiusClasses = $pill ? 'rounded-full' : 'rounded-lg';

    // Color classes for all variants
    $colorClasses = [
        'blue' => [
            'solid' => 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800',
            'outline' => 'text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-blue-300 dark:border-blue-500 dark:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white dark:focus:ring-blue-800',
            'ghost' => 'text-blue-700 hover:bg-blue-100 focus:ring-blue-300 dark:text-blue-500 dark:hover:bg-blue-500/10 dark:focus:ring-blue-800',
            'gradient' => 'text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-blue-300 dark:focus:ring-blue-800',
            'shadow' => 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-blue-300 shadow-lg shadow-blue-500/50 dark:shadow-blue-800/80 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'
        ],
        'gray' => [
            'solid' => 'text-white bg-gray-800 hover:bg-gray-900 focus:ring-gray-300 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800',
            'outline' => 'text-gray-900 border border-gray-300 hover:bg-gray-100 focus:ring-gray-300 dark:border-gray-600 dark:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800',
            'ghost' => 'text-gray-900 hover:bg-gray-100 focus:ring-gray-300 dark:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-800',
            'gradient' => 'text-white bg-gradient-to-r from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br focus:ring-gray-300 dark:focus:ring-gray-800',
            'shadow' => 'text-white bg-gray-800 hover:bg-gray-900 focus:ring-gray-300 shadow-lg shadow-gray-500/50 dark:shadow-gray-800/80 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800'
        ],
        'green' => [
            'solid' => 'text-white bg-green-700 hover:bg-green-800 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800',
            'outline' => 'text-green-700 border border-green-700 hover:bg-green-700 hover:text-white focus:ring-green-300 dark:border-green-500 dark:text-green-500 dark:hover:bg-green-500 dark:hover:text-white dark:focus:ring-green-800',
            'ghost' => 'text-green-700 hover:bg-green-100 focus:ring-green-300 dark:text-green-500 dark:hover:bg-green-500/10 dark:focus:ring-green-800',
            'gradient' => 'text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br focus:ring-green-300 dark:focus:ring-green-800',
            'shadow' => 'text-white bg-green-700 hover:bg-green-800 focus:ring-green-300 shadow-lg shadow-green-500/50 dark:shadow-green-800/80 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800'
        ],
        'red' => [
            'solid' => 'text-white bg-red-700 hover:bg-red-800 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800',
            'outline' => 'text-red-700 border border-red-700 hover:bg-red-700 hover:text-white focus:ring-red-300 dark:border-red-500 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:ring-red-800',
            'ghost' => 'text-red-700 hover:bg-red-100 focus:ring-red-300 dark:text-red-500 dark:hover:bg-red-500/10 dark:focus:ring-red-800',
            'gradient' => 'text-white bg-gradient-to-r from-red-500 via-red-600 to-red-700 hover:bg-gradient-to-br focus:ring-red-300 dark:focus:ring-red-800',
            'shadow' => 'text-white bg-red-700 hover:bg-red-800 focus:ring-red-300 shadow-lg shadow-red-500/50 dark:shadow-red-800/80 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800'
        ],
        'yellow' => [
            'solid' => 'text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 dark:focus:ring-yellow-900',
            'outline' => 'text-yellow-400 border border-yellow-400 hover:bg-yellow-400 hover:text-white focus:ring-yellow-300 dark:border-yellow-500 dark:text-yellow-500 dark:hover:bg-yellow-500 dark:hover:text-white dark:focus:ring-yellow-800',
            'ghost' => 'text-yellow-400 hover:bg-yellow-100 focus:ring-yellow-300 dark:text-yellow-500 dark:hover:bg-yellow-500/10 dark:focus:ring-yellow-800',
            'gradient' => 'text-white bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br focus:ring-yellow-300 dark:focus:ring-yellow-800',
            'shadow' => 'text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-yellow-300 shadow-lg shadow-yellow-500/50 dark:shadow-yellow-800/80 dark:focus:ring-yellow-900'
        ],
        'purple' => [
            'solid' => 'text-white bg-purple-700 hover:bg-purple-800 focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800',
            'outline' => 'text-purple-700 border border-purple-700 hover:bg-purple-700 hover:text-white focus:ring-purple-300 dark:border-purple-500 dark:text-purple-500 dark:hover:bg-purple-500 dark:hover:text-white dark:focus:ring-purple-800',
            'ghost' => 'text-purple-700 hover:bg-purple-100 focus:ring-purple-300 dark:text-purple-500 dark:hover:bg-purple-500/10 dark:focus:ring-purple-800',
            'gradient' => 'text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-purple-300 dark:focus:ring-purple-800',
            'shadow' => 'text-white bg-purple-700 hover:bg-purple-800 focus:ring-purple-300 shadow-lg shadow-purple-500/50 dark:shadow-purple-800/80 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800'
        ],
        'pink' => [
            'solid' => 'text-white bg-pink-700 hover:bg-pink-800 focus:ring-pink-300 dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800',
            'outline' => 'text-pink-700 border border-pink-700 hover:bg-pink-700 hover:text-white focus:ring-pink-300 dark:border-pink-500 dark:text-pink-500 dark:hover:bg-pink-500 dark:hover:text-white dark:focus:ring-pink-800',
            'ghost' => 'text-pink-700 hover:bg-pink-100 focus:ring-pink-300 dark:text-pink-500 dark:hover:bg-pink-500/10 dark:focus:ring-pink-800',
            'gradient' => 'text-white bg-gradient-to-r from-pink-500 via-pink-600 to-pink-700 hover:bg-gradient-to-br focus:ring-pink-300 dark:focus:ring-pink-800',
            'shadow' => 'text-white bg-pink-700 hover:bg-pink-800 focus:ring-pink-300 shadow-lg shadow-pink-500/50 dark:shadow-pink-800/80 dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800'
        ],
        'indigo' => [
            'solid' => 'text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-indigo-300 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800',
            'outline' => 'text-indigo-700 border border-indigo-700 hover:bg-indigo-700 hover:text-white focus:ring-indigo-300 dark:border-indigo-500 dark:text-indigo-500 dark:hover:bg-indigo-500 dark:hover:text-white dark:focus:ring-indigo-800',
            'ghost' => 'text-indigo-700 hover:bg-indigo-100 focus:ring-indigo-300 dark:text-indigo-500 dark:hover:bg-indigo-500/10 dark:focus:ring-indigo-800',
            'gradient' => 'text-white bg-gradient-to-r from-indigo-500 via-indigo-600 to-indigo-700 hover:bg-gradient-to-br focus:ring-indigo-300 dark:focus:ring-indigo-800',
            'shadow' => 'text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-indigo-300 shadow-lg shadow-indigo-500/50 dark:shadow-indigo-800/80 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800'
        ],
        'teal' => [
            'solid' => 'text-white bg-teal-700 hover:bg-teal-800 focus:ring-teal-300 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800',
            'outline' => 'text-teal-700 border border-teal-700 hover:bg-teal-700 hover:text-white focus:ring-teal-300 dark:border-teal-500 dark:text-teal-500 dark:hover:bg-teal-500 dark:hover:text-white dark:focus:ring-teal-800',
            'ghost' => 'text-teal-700 hover:bg-teal-100 focus:ring-teal-300 dark:text-teal-500 dark:hover:bg-teal-500/10 dark:focus:ring-teal-800',
            'gradient' => 'text-white bg-gradient-to-r from-teal-500 via-teal-600 to-teal-700 hover:bg-gradient-to-br focus:ring-teal-300 dark:focus:ring-teal-800',
            'shadow' => 'text-white bg-teal-700 hover:bg-teal-800 focus:ring-teal-300 shadow-lg shadow-teal-500/50 dark:shadow-teal-800/80 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800'
        ]
    ];

    // Determine the actual variant to use
    $actualVariant = $variant;
    if ($gradient) $actualVariant = 'gradient';
    if ($shadow) $actualVariant = 'shadow';

    // Safely resolve classes with sensible fallbacks to avoid undefined array key notices
    $sizeClass = $sizeClasses[$size] ?? $sizeClasses['md'];
    $colorSet = $colorClasses[$color] ?? $colorClasses['blue'];
    $variantClass = $colorSet[$actualVariant] ?? $colorSet['solid'];

    $classes = $baseClasses . ' ' . $sizeClass . ' ' . $radiusClasses . ' ' . $variantClass;

    if ($disabled) {
        $classes .= ' opacity-50 cursor-not-allowed';
    }

    if ($loading) {
        $classes .= ' cursor-wait';
    }
@endphp

<button
    type="{{ $type }}"
    {{ $attributes->merge(['class' => $classes]) }}
    @if($disabled) disabled @endif
    wire:click="handleClick"
>
    @if($loading)
        <svg aria-hidden="true" role="status" class="inline w-4 h-4 me-3 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
        </svg>
    @elseif($icon && $iconPosition === 'left')
        <span class="mr-2">{{ $icon }}</span>
    @endif

    {{ $slot }}

    @if($icon && $iconPosition === 'right')
        <span class="ml-2">{{ $icon }}</span>
    @endif
</button>
