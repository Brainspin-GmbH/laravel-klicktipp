<?php

namespace Brainspin\LaravelKlicktipp\Providers;

use Brainspin\LaravelKlicktipp\Services\KlicktippPartnerConnector;
use Illuminate\Support\ServiceProvider;

class LaravelKlicktippServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'klicktipp');

        $this->app->bind('klicktipp', function($app) {
            return new KlicktippPartnerConnector(
                config('klicktipp.username'),
                config('klicktipp.developer_key'),
                config('klicktipp.customer_key'),
                config('klicktipp.service')
            );
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