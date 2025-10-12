# QuickPanel FlowBite UI

A Laravel package providing FlowBite UI components with Livewire integration for QuickPanel applications.

## Features

- **FlowBite UI Components**: Pre-built components following FlowBite design system
- **Livewire Integration**: Interactive components with Livewire 3.5.19+
- **Laravel Auto-Discovery**: Automatic service provider registration
- **Configurable**: Customizable component settings via config file
- **TypeScript Ready**: Built with TypeScript support in mind

## Installation

The package is already configured as a local repository in your main `composer.json`. To install:

```bash
composer update
```

## Configuration

Publish the config file:

```bash
php artisan vendor:publish --provider="QuickPanel\FlowBiteUI\QuickPanelFlowBiteUIServiceProvider" --tag="config"
```

## Usage

### Blade Components

Use the included Blade components in your views:

```blade
<!-- Button Component -->
<x-flowbite-ui::button variant="solid" color="blue" size="md">
    Click Me
</x-flowbite-ui::button>

<!-- Input Component -->
<x-flowbite-ui::input 
    type="text" 
    label="Username" 
    placeholder="Enter your username"
    required 
/>

<!-- Card Component -->
<x-flowbite-ui::card header="Card Title" footer="Card Footer">
    <p>Card content goes here...</p>
</x-flowbite-ui::card>

<!-- Alert Component -->
<x-flowbite-ui::alert 
    type="success" 
    title="Success!" 
    message="Your action was completed successfully."
    dismissible 
/>
```

### Livewire Components

Use the Livewire components for interactive functionality with Livewire 3 syntax:

```blade
<livewire:button 
    variant="outline" 
    color="green" 
    size="lg"
    text="Submit Form"
    wire:click="handleSubmit"
/>

<livewire:input 
    type="text" 
    label="Username" 
    placeholder="Enter username"
    wire:model.live="username"
/>

<livewire:card 
    header="Collapsible Card"
    wire:key="my-card"
>
    Card content here...
</livewire:card>

<livewire:alert 
    type="info" 
    title="Livewire Alert" 
    message="This is a dismissible alert"
    dismissible
    wire:key="my-alert"
/>
```

### Livewire 3 Features

- **Modern Event System**: Uses `dispatch()` instead of `emit()`
- **Attribute Listeners**: Uses `#[On]` attributes instead of `$listeners`
- **Optional Values**: Input values are optional by default
- **Real-time Updates**: Uses `wire:model.live` for instant updates

## Available Components

### Button
- **Variants**: solid, outline, ghost
- **Colors**: blue, gray, green, red
- **Sizes**: xs, sm, md, lg, xl

### Input
- **Types**: text, email, password, number, etc.
- **Sizes**: sm, md, lg
- **Colors**: gray, blue
- **Features**: validation, labels, placeholders

### Card
- **Features**: header, footer, customizable padding and shadows
- **Styling**: border options, rounded corners

### Alert
- **Types**: info, success, warning, error, danger, dark
- **Features**: dismissible, icons, custom messages
- **Sizes**: sm, md, lg
- **Styling**: border accents, dark mode support

## Configuration Options

Edit `config/flowbite-ui.php` to customize:

- Default theme settings
- Component default values
- Asset loading preferences
- Livewire auto-discovery settings

## Author

**Ali Qasemzadeh** - aliqasemzadeh7@gmail.com

## License

This package is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
