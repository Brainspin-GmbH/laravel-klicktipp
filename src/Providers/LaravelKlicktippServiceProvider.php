<?php

namespace Brainspin\LaravelKlicktipp\Providers;

use Brainspin\LaravelKlicktipp\Services\KlicktippConnector;
use Illuminate\Support\ServiceProvider;

class LaravelKlicktippServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'klicktipp');

        $this->app->bind('klicktipp', function($app) {
            return new KlicktippConnector();
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('klicktipp.php'),
            ], 'config');

        }
    }
}