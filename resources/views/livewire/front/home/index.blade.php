<x-slot name="title">
    {{ __('platform::common.home') }}
</x-slot>
<div>
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">FlowBite UI Components Test</h1>

        <!-- Button Components -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Button Components</h2>
            <div class="space-x-4">
                <x-flowbite-ui::button variant="solid" color="blue" size="md">
                    Solid Blue Button
                </x-flowbite-ui::button>

                <x-flowbite-ui::button variant="outline" color="green" size="lg">
                    Outline Green Button
                </x-flowbite-ui::button>

                <x-flowbite-ui::button variant="ghost" color="red" size="sm">
                    Ghost Red Button
                </x-flowbite-ui::button>
            </div>
        </div>

        <!-- Input Components -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Input Components</h2>
            <div class="space-y-4 max-w-md">
                <x-flowbite-ui::input
                    type="text"
                    label="Username"
                    placeholder="Enter your username"
                    required
                />

                <x-flowbite-ui::input
                    type="email"
                    label="Email"
                    placeholder="Enter your email"
                    color="blue"
                />

                <x-flowbite-ui::input
                    type="password"
                    label="Password"
                    placeholder="Enter your password"
                    error="Password is required"
                />
            </div>
        </div>

        <!-- Alert Components -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Alert Components</h2>
            <div class="space-y-4">
                <x-flowbite-ui::alert type="info" title="Info alert!" message="Change a few things up and try submitting again." dismissible />

                <x-flowbite-ui::alert type="success" title="Success alert!" message="Your action was completed successfully." />

                <x-flowbite-ui::alert type="warning" title="Warning alert!" message="Please check your input before proceeding." />

                <x-flowbite-ui::alert type="error" title="Error alert!" message="Something went wrong. Please try again." />

                <x-flowbite-ui::alert type="dark" title="Dark alert!" message="This is a dark themed alert message." />
            </div>
        </div>

        <!-- Card Components -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Card Components</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <x-flowbite-ui::card header="Basic Card" footer="Card Footer">
                    <p class="text-gray-600">This is a basic card component with header and footer.</p>
                </x-flowbite-ui::card>

                <x-flowbite-ui::card padding="p-8" shadow="shadow-lg">
                    <h3 class="text-lg font-semibold mb-2">Custom Card</h3>
                    <p class="text-gray-600">This card has custom padding and shadow.</p>
                </x-flowbite-ui::card>
            </div>
        </div>

        <!-- Livewire Components -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Livewire Components</h2>
            <div class="space-y-4">
                <div class="space-x-4">
                    <livewire:button
                        variant="solid"
                        color="blue"
                        size="lg"
                        text="Livewire Button"
                    />

                    <livewire:button
                        variant="outline"
                        color="green"
                        size="md"
                        text="Enable Input"
                        wire:click="$dispatch('enable-input')"
                    />
                </div>

                <livewire:input
                    type="text"
                    label="Livewire Input"
                    placeholder="Type something..."
                    wire:key="livewire-input"
                />

                <livewire:card
                    header="Collapsible Card"
                    footer="Card Footer"
                    wire:key="livewire-card"
                >
                    <p class="text-gray-600">This is a collapsible Livewire card component.</p>
                    <p class="text-gray-600 mt-2">Click the arrow in the header to toggle collapse.</p>
                </livewire:card>

                <div class="space-y-2">
                    <h3 class="text-lg font-medium">Livewire Alert Components</h3>
                    <livewire:alert
                        type="info"
                        title="Livewire Info Alert"
                        message="This is a dismissible Livewire alert"
                        dismissible
                        wire:key="livewire-alert-info"
                    />

                    <livewire:alert
                        type="success"
                        title="Success!"
                        message="Operation completed successfully"
                        wire:key="livewire-alert-success"
                    />
                </div>
            </div>
        </div>
    </div>
</div>
