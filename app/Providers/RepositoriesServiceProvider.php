<?php

namespace App\Providers;


use App\Repositories\Admin\About\AboutRepository;
use App\Repositories\Admin\Core\About\AboutRepositoryInterface;

use App\Repositories\Admin\Education\EducationRepository;
use App\Repositories\Admin\Core\Education\EducationRepositoryInterface;

use App\Repositories\Admin\Experience\ExperienceRepository;
use App\Repositories\Admin\Core\Experience\ExperienceRepositoryInterface;


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
            EducationRepositoryInterface::class,
            EducationRepository::class,
            ExperienceRepositoryInterface::class,
            ExperienceRepository::class,
        );
    }
}
