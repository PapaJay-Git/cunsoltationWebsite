<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DevOptimize extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:dev-optimize';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is for Development only - Clearing cache, configs, routes, and views';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('cache:clear');
        $this->call('config:clear');
        $this->call('route:clear');
        $this->call('view:clear');

        $this->info('Application refreshment successfully.');
    }
}
