<?php

namespace new_package\calculators;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    public function register()
    {
         $this->app->make('new_package\calculators\CalculatorController'); // load controller
         $this->app->make('new_package\calculators\UserRegistrationController');

         $this->loadViewsFrom(__DIR__.'/views', 'calculator'); // load views
         $this->loadViewsFrom(__DIR__.'/views/register', 'register');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php'; // load route
    }
}