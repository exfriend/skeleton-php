<?php

namespace Exfriend\:package_nsn;

use Illuminate\Support\ServiceProvider;

class :package_nsnServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path(':package_name.php'),
            ], 'config');

            /*
            $this->loadViewsFrom(__DIR__.'/../resources/views', ':package_name');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/:package_name'),
            ], 'views');
            */
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'skeleton');
    }
}
