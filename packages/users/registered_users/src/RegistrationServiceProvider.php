<?php

namespace users\signup;

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
        $this->app->make('users\signup\UserRegistrationController');
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
