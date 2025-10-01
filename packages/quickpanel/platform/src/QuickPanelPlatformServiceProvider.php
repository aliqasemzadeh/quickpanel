<?php

namespace QuickPanel\Platform;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class QuickPanelPlatformServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/platform.php', 'platform');
    }

    public function boot(): void
    {
        // Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'platform');

        // Publishes the config file
        $this->publishes([
            __DIR__.'/../config/platform.php' => config_path('platform.php'),
        ], 'platform-config');

        // Publishes the views
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/platform'),
        ], 'platform-views');
    }
}
