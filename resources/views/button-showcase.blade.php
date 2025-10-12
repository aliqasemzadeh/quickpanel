<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlowBite UI Button Showcase</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="h-full bg-gray-50 dark:bg-gray-900">
    <div class="min-h-screen">
        <div class="max-w-7xl mx-auto px-4 py-8">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    FlowBite UI Button Components
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                    Complete implementation of Flowbite button components with all variants, colors, sizes, and features.
                </p>
                <button 
                    onclick="document.documentElement.classList.toggle('dark')"
                    class="mt-4 px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white rounded-lg hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors"
                >
                    Toggle Dark Mode
                </button>
            </div>

            <!-- Default Buttons -->
            <div class="mb-12">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Default Buttons</h2>
                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm dark:shadow-gray-900/20">
                    <div class="flex flex-wrap gap-4">
                        <x-flowbite-ui::button color="blue">Default Blue</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="gray" variant="outline">Alternative</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="gray" variant="solid">Dark</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="gray" variant="outline">Light</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="green">Green</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="red">Red</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="yellow">Yellow</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="purple">Purple</x-flowbite-ui::button>
                    </div>
                </div>
            </div>

            <!-- Button Pills -->
            <div class="mb-12">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Button Pills</h2>
                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm dark:shadow-gray-900/20">
                    <div class="flex flex-wrap gap-4">
                        <x-flowbite-ui::button color="blue" pill>Default Blue</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="gray" variant="outline" pill>Alternative</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="gray" variant="solid" pill>Dark</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="gray" variant="outline" pill>Light</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="green" pill>Green</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="red" pill>Red</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="yellow" pill>Yellow</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="purple" pill>Purple</x-flowbite-ui::button>
                    </div>
                </div>
            </div>

            <!-- Gradient Buttons -->
            <div class="mb-12">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Gradient Buttons</h2>
                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm dark:shadow-gray-900/20">
                    <div class="flex flex-wrap gap-4">
                        <x-flowbite-ui::button color="blue" gradient>Blue Gradient</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="green" gradient>Green Gradient</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="red" gradient>Red Gradient</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="purple" gradient>Purple Gradient</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="pink" gradient>Pink Gradient</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="indigo" gradient>Indigo Gradient</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="teal" gradient>Teal Gradient</x-flowbite-ui::button>
                    </div>
                </div>
            </div>

            <!-- Shadow Buttons -->
            <div class="mb-12">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Colored Shadow Buttons</h2>
                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm dark:shadow-gray-900/20">
                    <div class="flex flex-wrap gap-4">
                        <x-flowbite-ui::button color="blue" shadow>Blue Shadow</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="green" shadow>Green Shadow</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="red" shadow>Red Shadow</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="purple" shadow>Purple Shadow</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="pink" shadow>Pink Shadow</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="indigo" shadow>Indigo Shadow</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="teal" shadow>Teal Shadow</x-flowbite-ui::button>
                    </div>
                </div>
            </div>

            <!-- Button Sizes -->
            <div class="mb-12">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Button Sizes</h2>
                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm dark:shadow-gray-900/20">
                    <div class="flex flex-wrap items-center gap-4">
                        <x-flowbite-ui::button color="blue" size="xs">Extra Small</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="blue" size="sm">Small</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="blue" size="md">Medium</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="blue" size="lg">Large</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="blue" size="xl">Extra Large</x-flowbite-ui::button>
                    </div>
                </div>
            </div>

            <!-- Buttons with Icons -->
            <div class="mb-12">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Buttons with Icons</h2>
                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm dark:shadow-gray-900/20">
                    <div class="flex flex-wrap gap-4">
                        <x-flowbite-ui::button color="blue" icon="<svg class='w-4 h-4' fill='currentColor' viewBox='0 0 20 20'><path d='M10 12a2 2 0 100-4 2 2 0 000 4z'/><path fill-rule='evenodd' d='M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z' clip-rule='evenodd'/></svg>">
                            View
                        </x-flowbite-ui::button>
                        <x-flowbite-ui::button color="green" icon="<svg class='w-4 h-4' fill='currentColor' viewBox='0 0 20 20'><path fill-rule='evenodd' d='M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z' clip-rule='evenodd'/></svg>">
                            Add
                        </x-flowbite-ui::button>
                        <x-flowbite-ui::button color="red" icon="<svg class='w-4 h-4' fill='currentColor' viewBox='0 0 20 20'><path fill-rule='evenodd' d='M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z' clip-rule='evenodd'/></svg>">
                            Delete
                        </x-flowbite-ui::button>
                        <x-flowbite-ui::button color="purple" icon="<svg class='w-4 h-4' fill='currentColor' viewBox='0 0 20 20'><path d='M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z'/></svg>" iconPosition="right">
                            Dashboard
                        </x-flowbite-ui::button>
                    </div>
                </div>
            </div>

            <!-- Loading Buttons -->
            <div class="mb-12">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Loading Buttons</h2>
                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm dark:shadow-gray-900/20">
                    <div class="flex flex-wrap gap-4">
                        <x-flowbite-ui::button color="blue" loading>Loading...</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="green" loading variant="outline">Processing...</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="red" loading pill>Saving...</x-flowbite-ui::button>
                    </div>
                </div>
            </div>

            <!-- Disabled Buttons -->
            <div class="mb-12">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Disabled Buttons</h2>
                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm dark:shadow-gray-900/20">
                    <div class="flex flex-wrap gap-4">
                        <x-flowbite-ui::button color="blue" disabled>Disabled Button</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="green" variant="outline" disabled>Disabled Outline</x-flowbite-ui::button>
                        <x-flowbite-ui::button color="red" variant="ghost" disabled>Disabled Ghost</x-flowbite-ui::button>
                    </div>
                </div>
            </div>

            <!-- All Color Variants -->
            <div class="mb-12">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">All Color Variants</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach(['blue', 'gray', 'green', 'red', 'yellow', 'purple', 'pink', 'indigo', 'teal'] as $color)
                        <div class="bg-white dark:bg-gray-800 rounded-lg p-4 shadow-sm dark:shadow-gray-900/20">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-3 capitalize">{{ $color }} Buttons</h3>
                            <div class="space-y-2">
                                <x-flowbite-ui::button color="{{ $color }}" size="sm">Solid</x-flowbite-ui::button>
                                <x-flowbite-ui::button color="{{ $color }}" variant="outline" size="sm">Outline</x-flowbite-ui::button>
                                <x-flowbite-ui::button color="{{ $color }}" variant="ghost" size="sm">Ghost</x-flowbite-ui::button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Usage Examples -->
            <div class="mb-12">
                <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Usage Examples</h2>
                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm dark:shadow-gray-900/20">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Basic Usage</h3>
                            <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded-lg text-sm overflow-x-auto"><code>&lt;x-flowbite-ui::button color="blue"&gt;
    Click Me
&lt;/x-flowbite-ui::button&gt;</code></pre>
                        </div>
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Advanced Usage</h3>
                            <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded-lg text-sm overflow-x-auto"><code>&lt;x-flowbite-ui::button 
    color="purple" 
    variant="outline" 
    size="lg" 
    pill 
    icon="&lt;svg&gt;...&lt;/svg&gt;"
    loading
&gt;
    Advanced Button
&lt;/x-flowbite-ui::button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
