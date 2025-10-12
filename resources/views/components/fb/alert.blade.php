@props([
    // type variants similar to Flowbite examples
    // options: info, danger, success, warning, dark, alert (alias of dark)
    'type' => 'info',
    // solid (bg + text) or outlined (border + bg + text) like additional content examples
    'variant' => 'solid', // options: solid, outlined
    // simple dismiss icon button (only auto-rendered for simple layout without footer)
    'dismissible' => false,
    // optional title; if provided we render the complex layout (header/body/footer)
    'title' => null,
    // screen-reader label (defaults to ucfirst(type))
    'srLabel' => null,
    // extra classes from caller
    'class' => '',
])

<?php
$typeKey = strtolower($type);
if ($typeKey === 'alert') { $typeKey = 'dark'; }
$variantKey = strtolower($variant) === 'outlined' ? 'outlined' : 'solid';

$containerBase = 'rounded-lg p-4 text-sm';

$solidMap = [
    'info' => 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400',
    'danger' => 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400',
    'success' => 'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400',
    'warning' => 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300',
    'dark' => 'text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text-gray-300',
];

$outlinedMap = [
    'info' => 'text-blue-800 border border-blue-300 bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800',
    'danger' => 'text-red-800 border border-red-300 bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800',
    'success' => 'text-green-800 border border-green-300 bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800',
    'warning' => 'text-yellow-800 border border-yellow-300 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800',
    'dark' => 'text-gray-800 border border-gray-300 bg-gray-50 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-300',
];

$dismissBtnMap = [
    'info' => 'bg-blue-50 text-blue-500 focus:ring-2 focus:ring-blue-400 hover:bg-blue-200 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700',
    'danger' => 'bg-red-50 text-red-500 focus:ring-2 focus:ring-red-400 hover:bg-red-200 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700',
    'success' => 'bg-green-50 text-green-500 focus:ring-2 focus:ring-green-400 hover:bg-green-200 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700',
    'warning' => 'bg-yellow-50 text-yellow-500 focus:ring-2 focus:ring-yellow-400 hover:bg-yellow-200 dark:bg-gray-800 dark:text-yellow-300 dark:hover:bg-gray-700',
    'dark' => 'bg-gray-50 text-gray-500 focus:ring-2 focus:ring-gray-400 hover:bg-gray-200 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white',
];

$containerVariantClasses = $variantKey === 'outlined' ? ($outlinedMap[$typeKey] ?? $outlinedMap['info']) : ($solidMap[$typeKey] ?? $solidMap['info']);
$dismissBtnClasses = $dismissBtnMap[$typeKey] ?? $dismissBtnMap['info'];

$srText = $srLabel ?: ucfirst($typeKey);
$hasTitle = filled($title);
$hasFooter = isset($footer) && trim($footer) !== '';
$hasIcon = isset($icon) && trim($icon) !== '';

// When simple (no title/footer), we can make the container a flex row if icon or dismissible
$isSimple = !$hasTitle && !$hasFooter;
$maybeFlex = $isSimple && ($hasIcon || $dismissible) ? 'flex items-center' : '';

$containerClasses = trim("$containerBase $containerVariantClasses $maybeFlex");

$containerId = $attributes->get('id');
$targetAttr = $containerId ? '#'.$containerId : '';
?>

<div x-data="{ show: true }" x-show="show" x-transition.opacity.duration.200ms x-cloak role="alert" {{ $attributes->merge(['class' => $containerClasses . ($class ? ' ' . $class : '')]) }}>
    @if($isSimple)
        @if($hasIcon)
            <div class="shrink-0 w-4 h-4">
                {{ $icon }}
            </div>
            <span class="sr-only">{{ $srText }}</span>
        @endif

        <div class="{{ $hasIcon ? 'ms-3' : '' }} text-sm font-medium">
            {{ $slot }}
        </div>

        @if($dismissible)
            <button type="button"
                    class="ms-auto -mx-1.5 -my-1.5 {{ $dismissBtnClasses }} rounded-lg p-1.5 inline-flex items-center justify-center h-8 w-8"
                    @if($targetAttr) data-dismiss-target="{{ $targetAttr }}" @endif
                    @click="show = false"
                    aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        @endif
    @else
        <div class="flex items-center">
            @if($hasIcon)
                <div class="shrink-0 w-4 h-4 me-2">
                    {{ $icon }}
                </div>
            @endif
            <span class="sr-only">{{ $srText }}</span>
            @if($hasTitle)
                <h3 class="text-lg font-medium">{{ $title }}</h3>
            @endif
        </div>
        <div class="mt-2 mb-4 text-sm">
            {{ $slot }}
        </div>
        @if($hasFooter)
            <div class="flex">
                {{ $footer }}
            </div>
        @endif
    @endif
</div>
