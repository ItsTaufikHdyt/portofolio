<?php

namespace App\Providers;


use App\Repositories\Admin\About\AboutRepository;
use App\Repositories\Admin\Core\About\AboutRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            AboutRepositoryInterface::class,
            AboutRepository::class,

        );
    }
}
