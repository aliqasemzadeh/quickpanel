<?php

namespace QuickPanel\Platform;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

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
        $this->loadRoutesFrom(__DIR__.'/../routes/admin.php');

        // Views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'platform');

        // Translations
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'platform');

        // Register Livewire components (package aliases)
        Livewire::component(
            'quick-panel.platform.livewire.administrator.auth.login',
            \QuickPanel\Platform\Livewire\Administrator\Auth\Login::class
        );

        // Register console commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\Commands\CreateAdminCommand::class,
                Console\Commands\CreatePermissionsCommand::class,
                Console\Commands\CreateRolesCommand::class,
                Console\Commands\QuickSetupCommand::class,
                Console\Commands\SetUserAdminCommand::class,
            ]);
        }

        // Migrations
        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'platform-migrations');

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
