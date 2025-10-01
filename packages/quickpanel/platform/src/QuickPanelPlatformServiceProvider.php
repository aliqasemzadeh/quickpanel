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
        $this->loadRoutesFrom(__DIR__.'/../routes/auth.php');

        // Views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'platform');

        // Console commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                \QuickPanel\Platform\Commands\Administrator\CreateAdminCommand::class,
                \QuickPanel\Platform\Commands\Administrator\CreatePermissionsCommand::class,
                \QuickPanel\Platform\Commands\Administrator\CreateRolesCommand::class,
                \QuickPanel\Platform\Commands\Administrator\SetUserAdminCommand::class,
                \QuickPanel\Platform\Commands\Install\QuickPanelPlatformSetup::class,
            ]);
        }

        // Publishes the config file
        $this->publishes([
            __DIR__.'/../config/platform.php' => config_path('platform.php'),
        ], 'platform-config');

        // Publishes the views
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/platform'),
        ], 'platform-views');

        // Publishes the lang files
        $this->publishes([
            __DIR__.'/../lang' => resource_path('lang/vendor/platform'),
        ], 'platform-lang');
    }
}
