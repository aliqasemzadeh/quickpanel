<x-slot name="title">
    {{ __('platform::common.home') }}
</x-slot>
<div class="min-h-screen bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <div class="max-w-6xl mx-auto px-4 py-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                FlowBite UI Components
            </h1>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">
                A comprehensive collection of UI components built with Tailwind CSS, optimized for dark mode and modern web applications.
            </p>
        </div>
        <!-- Button Components -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Button Components</h2>
            <x-flowbite-ui::card header="Interactive Buttons" footer="Various button styles and sizes" variant="elevated" shadow="md">
                <div class="flex flex-wrap gap-4">
                    <x-flowbite-ui::button variant="solid" color="blue" size="md">
                        Solid Blue Button
                    </x-flowbite-ui::button>

                    <x-flowbite-ui::button variant="outline" color="green" size="lg">
                        Outline Green Button
                    </x-flowbite-ui::button>

                    <x-flowbite-ui::button variant="ghost" color="red" size="sm">
                        Ghost Red Button
                    </x-flowbite-ui::button>

                    <x-flowbite-ui::button variant="solid" color="purple" size="md">
                        Purple Button
                    </x-flowbite-ui::button>

                    <x-flowbite-ui::button variant="outline" color="gray" size="md">
                        Gray Outline
                    </x-flowbite-ui::button>
                </div>
            </x-flowbite-ui::card>
        </div>


        <!-- Input Components -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Input Components</h2>
            <x-flowbite-ui::card header="Form Inputs" footer="Various input types and validation states" variant="outlined" shadow="sm">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <x-flowbite-ui::input
                            type="text"
                            label="Username"
                            placeholder="Enter your username"
                            required
                        />

                        <x-flowbite-ui::input
                            type="email"
                            label="Email Address"
                            placeholder="Enter your email"
                            color="blue"
                        />
                    </div>
                    
                    <div class="space-y-4">
                        <x-flowbite-ui::input
                            type="password"
                            label="Password"
                            placeholder="Enter your password"
                            error="Password is required"
                        />

                        <x-flowbite-ui::input
                            type="tel"
                            label="Phone Number"
                            placeholder="Enter your phone number"
                        />
                    </div>
                </div>
            </x-flowbite-ui::card>
        </div>

        <!-- Alert Components -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Alert Components</h2>
            <div class="space-y-4">
                <x-flowbite-ui::alert type="info" title="Info Alert" message="This is an informational message with dismissible functionality." dismissible />

                <x-flowbite-ui::alert type="success" title="Success Alert" message="Your action was completed successfully!" />

                <x-flowbite-ui::alert type="warning" title="Warning Alert" message="Please check your input before proceeding." />

                <x-flowbite-ui::alert type="error" title="Error Alert" message="Something went wrong. Please try again." />

                <x-flowbite-ui::alert type="dark" title="Dark Alert" message="This is a dark themed alert message." />
            </div>
        </div>

        <!-- Card Components -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Card Components</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-flowbite-ui::card header="Basic Card" footer="Standard Footer">
                    <p class="text-gray-600 dark:text-gray-300">This is a basic card component with header and footer.</p>
                </x-flowbite-ui::card>

                <x-flowbite-ui::card 
                    variant="elevated" 
                    header="Elevated Card" 
                    footer="With Enhanced Shadow"
                    shadow="lg"
                >
                    <p class="text-gray-600 dark:text-gray-300">This card has an elevated appearance with enhanced shadow.</p>
                </x-flowbite-ui::card>

                <x-flowbite-ui::card 
                    variant="outlined" 
                    header="Outlined Card" 
                    footer="With Border"
                >
                    <p class="text-gray-600 dark:text-gray-300">This card has a prominent border outline.</p>
                </x-flowbite-ui::card>

                <x-flowbite-ui::card 
                    variant="filled" 
                    header="Filled Card" 
                    footer="With Background"
                >
                    <p class="text-gray-600 dark:text-gray-300">This card has a filled background color.</p>
                </x-flowbite-ui::card>

                <x-flowbite-ui::card 
                    variant="glass" 
                    header="Glass Card" 
                    footer="With Backdrop Blur"
                    shadow="xl"
                >
                    <p class="text-gray-600 dark:text-gray-300">This card has a glass morphism effect.</p>
                </x-flowbite-ui::card>

                <x-flowbite-ui::card 
                    header="Collapsible Card" 
                    footer="Click Header to Toggle"
                    collapsed="false"
                >
                    <p class="text-gray-600 dark:text-gray-300">This card can be collapsed by clicking the arrow in the header.</p>
                    <p class="text-gray-600 dark:text-gray-300 mt-2">The content will be hidden when collapsed.</p>
                </x-flowbite-ui::card>
            </div>
        </div>

        <!-- Livewire Components Demo -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Interactive Components</h2>
            <x-flowbite-ui::card header="Livewire Components" footer="Interactive components with real-time updates" variant="glass" shadow="lg">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Livewire Buttons</h3>
                        <div class="space-y-3">
                            <livewire:button 
                                variant="solid" 
                                color="blue" 
                                size="md"
                                text="Interactive Button"
                                wire:key="demo-button-1"
                            />
                            
                            <livewire:button 
                                variant="outline" 
                                color="green" 
                                size="md"
                                text="Click Me"
                                wire:key="demo-button-2"
                            />
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Livewire Inputs</h3>
                        <div class="space-y-3">
                            <livewire:input 
                                type="text" 
                                label="Livewire Input" 
                                placeholder="Type something..."
                                wire:key="demo-input"
                            />
                        </div>
                    </div>
                </div>
            </x-flowbite-ui::card>
        </div>

        <!-- Dark Mode Toggle Demo -->
        <div class="mb-12">
            <h2 class="text-2xl font-semibold text-gray-900 dark:text-white mb-6">Dark Mode Support</h2>
            <x-flowbite-ui::card header="Theme Adaptation" footer="All components automatically adapt to dark mode" variant="filled" shadow="md">
                <div class="text-center">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">
                        All components automatically adapt to dark mode
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        The components use Tailwind's dark mode classes to provide optimal contrast and readability in both light and dark themes.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <x-flowbite-ui::button variant="solid" color="blue" size="md">
                            Light Mode Ready
                        </x-flowbite-ui::button>
                        <x-flowbite-ui::button variant="outline" color="gray" size="md">
                            Dark Mode Ready
                        </x-flowbite-ui::button>
                    </div>
                </div>
            </x-flowbite-ui::card>
        </div>
    </div>
</div>
