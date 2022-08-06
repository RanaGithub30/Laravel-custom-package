<?php

namespace new_package\calculators;

use Illuminate\Support\ServiceProvider;

class RegistrationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    public function register()
    {
        $this->app->make('new_package\calculators\UserRegistrationController');
        $this->loadViewsFrom(__DIR__.'/views', 'register');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */

    public function boot()
    {
        include __DIR__.'routes.php';
    }
}
