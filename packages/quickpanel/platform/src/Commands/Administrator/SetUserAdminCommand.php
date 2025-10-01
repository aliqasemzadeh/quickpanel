<?php

namespace QuickPanel\Platform\Commands\Administrator;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;

class SetUserAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'platform::system:administrator:set-user-admin-command';

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
        App::setLocale('en');
        $userId = $this->ask('UserId');
        try {
            $user = User::findOrFail($userId);
            $user->assignRole('user');
            $user->assignRole('administrator');
            $this->info('User Set as Administrator');
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }

    }
}
