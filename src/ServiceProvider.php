<?php

namespace Seche\LaravelDhtmlxScheduler;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravel-dhtmlx-scheduler', function ($app) {
            return $app->make('Seche\LaravelDhtmlxScheduler\Scheduler');
        });
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views/', 'laravel-dhtmlx-scheduler');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel-dhtmlx-scheduler'];
    }
}
