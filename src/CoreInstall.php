<?php
namespace Mawdoo3\Drsk\Core;

use Illuminate\Console\Command;

class CoreInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'core:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'initial install of drsk Core';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        exec("php artisan vendor:publish --provider='Mawdoo3\Drsk\Core\DrskCoreServiceProvider'");
        $this->line("<info>Publishing:</info> Publishing Configration Done");
        exec("php artisan migrate --path=/database/migrations/CoreInstall");
        $this->line("<info>Migrating:</info> Migrating to DB Done");
        $this->line(PHP_EOL."<info>All Done !!</info>");
    }
}
