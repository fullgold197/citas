<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        //
        Paginator::useBootstrap();
       /*  $this->app['request']->server->set('HTTPS', 'on'); */
        //Sirve para convertir http en https
        if (config('app.env') === 'production') {
            $this->app['request']->server->set('HTTPS', 'on');
            \URL::forceScheme('https');
        }
    }
}
