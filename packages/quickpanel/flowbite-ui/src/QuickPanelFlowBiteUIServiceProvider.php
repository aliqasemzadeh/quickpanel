<?php

namespace QuickPanel\FlowBiteUI;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class QuickPanelFlowBiteUIServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/flowbite-ui.php', 'flowbite-ui'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Publish config file
        $this->publishes([
            __DIR__.'/../config/flowbite-ui.php' => config_path('flowbite-ui.php'),
        ], 'config');

        // Publish views
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/flowbite-ui'),
        ], 'views');

        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'flowbite-ui');

        // Register Livewire components
        $this->loadLivewireComponents();
    }

    /**
     * Load Livewire components
     */
    protected function loadLivewireComponents(): void
    {
        $componentsPath = __DIR__.'/../src/Components';
        
        if (is_dir($componentsPath)) {
            $files = glob($componentsPath.'/*.php');
            
            foreach ($files as $file) {
                $className = basename($file, '.php');
                $fullClassName = "QuickPanel\\FlowBiteUI\\Components\\{$className}";
                
                if (class_exists($fullClassName)) {
                    \Livewire\Livewire::component($className, $fullClassName);
                }
            }
        }
    }
}

