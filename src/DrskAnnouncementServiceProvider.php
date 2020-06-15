<?php
namespace Mawdoo3\Drsk\Announcement;

use Illuminate\Support\ServiceProvider;
use Mawdoo3\Drsk\Announcement\AnnouncementInstall;

class DrskAnnouncementServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public  function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');
        // $this->loadViewsFrom(__DIR__ . '/Views', 'task');
        $this->loadMigrationsFrom(__DIR__ . '/Migration');
        if ($this->app->runningInConsole()) {
            $this->commands([AnnouncementInstall::class]);
        }

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }
}
