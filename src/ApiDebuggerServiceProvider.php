<?php

namespace Karim88\ApiDebugger;

use Illuminate\Support\ServiceProvider;

class ApiDebuggerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make(ApiDebugger::class)->collectDatabaseQueries();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ApiDebugger::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            ApiDebugger::class
        ];
    }
}