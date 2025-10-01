<?php

namespace QuickPanel\Platform;

use Illuminate\Support\ServiceProvider;

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

        // Translations
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'platform');

        // Register console commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                \QuickPanel\Platform\Commands\CreatePermissionsCommand::class,
                \QuickPanel\Platform\Commands\CreateRolesCommand::class,
                \QuickPanel\Platform\Commands\QuickSetupCommand::class,
                \QuickPanel\Platform\Commands\SetUserAdminCommand::class,
            ]);
        }

        // Migrations
        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ]);

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
