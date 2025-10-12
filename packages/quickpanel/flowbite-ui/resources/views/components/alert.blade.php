@props([
    'type' => 'info',
    'dismissible' => false,
    'title' => '',
    'message' => '',
    'icon' => true,
    'border' => false,
    'size' => 'md'
])

@php
    $baseClasses = 'p-4 text-sm rounded-lg';
    
    $sizeClasses = [
        'sm' => 'p-3 text-xs',
        'md' => 'p-4 text-sm',
        'lg' => 'p-5 text-base'
    ];
    
    $typeClasses = [
        'info' => 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400',
        'success' => 'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400',
        'warning' => 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300',
        'error' => 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400',
        'danger' => 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400',
        'dark' => 'text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text-gray-300'
    ];
    
    $borderClasses = $border ? 'border-l-4' : '';
    $borderTypeClasses = [
        'info' => 'border-blue-500',
        'success' => 'border-green-500',
        'warning' => 'border-yellow-500',
        'error' => 'border-red-500',
        'danger' => 'border-red-500',
        'dark' => 'border-gray-500'
    ];
    
    $classes = $baseClasses . ' ' . $sizeClasses[$size] . ' ' . $typeClasses[$type];
    
    if ($border) {
        $classes .= ' ' . $borderClasses . ' ' . $borderTypeClasses[$type];
    }
    
    $iconSvg = [
        'info' => '<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>',
        'success' => '<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>',
        'warning' => '<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>',
        'error' => '<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>',
        'danger' => '<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>',
        'dark' => '<path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>'
    ];
@endphp

<div 
    {{ $attributes->merge(['class' => $classes, 'role' => 'alert']) }}
    @if($dismissible) 
        x-data="{ show: true }" 
        x-show="show" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-95"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-95"
    @endif
>
    @if($icon)
        <div class="flex items-center">
            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                {!! $iconSvg[$type] !!}
            </svg>
            <span class="sr-only">{{ ucfirst($type) }}</span>
            <div>
                @if($title)
                    <span class="font-medium">{{ $title }}</span>
                @endif
                @if($message)
                    <span @if($title) class="ml-1" @endif>{{ $message }}</span>
                @endif
                {{ $slot }}
            </div>
            @if($dismissible)
                <button 
                    type="button" 
                    class="ml-auto -mx-1.5 -my-1.5 rounded-lg p-1.5 inline-flex h-8 w-8 hover:bg-gray-200 focus:ring-2 focus:ring-gray-300 dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                    @click="show = false"
                    aria-label="Close"
                >
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            @endif
        </div>
    @else
        <div class="flex items-center justify-between">
            <div>
                @if($title)
                    <span class="font-medium">{{ $title }}</span>
                @endif
                @if($message)
                    <span @if($title) class="ml-1" @endif>{{ $message }}</span>
                @endif
                {{ $slot }}
            </div>
            @if($dismissible)
                <button 
                    type="button" 
                    class="ml-auto -mx-1.5 -my-1.5 rounded-lg p-1.5 inline-flex h-8 w-8 hover:bg-gray-200 focus:ring-2 focus:ring-gray-300 dark:hover:bg-gray-600 dark:focus:ring-gray-800"
                    @click="show = false"
                    aria-label="Close"
                >
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            @endif
        </div>
    @endif
</div>
