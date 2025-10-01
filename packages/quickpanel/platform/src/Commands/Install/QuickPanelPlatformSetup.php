<?php

namespace QuickPanel\Platform\Commands\Install;

use QuickPanel\Platform\Commands\Administrator\CreateAdminCommand;
use QuickPanel\Platform\Commands\Administrator\CreatePermissionsCommand;
use QuickPanel\Platform\Commands\Administrator\CreateRolesCommand;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class QuickPanelPlatformSetup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'platform::system:install.quick-panel-platform-setup-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Quick Setup Command');
        $this->info('Creating Roles, Permissions and Admin');
        $this->info('Create Roles');
        Artisan::call(CreateRolesCommand::class);
        $this->info('Create Permissions');
        Artisan::call(CreatePermissionsCommand::class);
        $this->info('Create Administration');
        Artisan::call(CreateAdminCommand::class);
    }
}
