<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Paddle\Cashier;
 
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Cashier::ignoreMigrations();
    }
}
