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
        Paginator::useBootstrap();
        $this->loadViewsFrom(__DIR__.'/../views','admin');
        $this->loadViewsFrom(__DIR__.'/../views','portfolio');
        $this->loadViewsFrom(__DIR__.'/../views','vcard');
        $this->loadViewsFrom(__DIR__.'/../views','link');
    }
}
