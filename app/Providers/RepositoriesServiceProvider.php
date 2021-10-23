<?php

namespace App\Providers;


use App\Repositories\Admin\About\AboutRepository;
use App\Repositories\Admin\Core\About\AboutRepositoryInterface;

use App\Repositories\Admin\Education\EducationRepository;
use App\Repositories\Admin\Core\Education\EducationRepositoryInterface;

use App\Repositories\Admin\Experience\ExperienceRepository;
use App\Repositories\Admin\Core\Experience\ExperienceRepositoryInterface;

use App\Repositories\Admin\Tags\TagsRepository;
use App\Repositories\Admin\Core\Tags\TagsRepositoryInterface;

use App\Repositories\Admin\Skills\SkillsRepository;
use App\Repositories\Admin\Core\Skills\SkillsRepositoryInterface;

use App\Repositories\Admin\Portfolio\PortfolioRepository;
use App\Repositories\Admin\Core\Portfolio\PortfolioRepositoryInterface;


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
            TagsRepositoryInterface::class,
            TagsRepository::class,
            SkillsRepositoryInterface::class,
            SkillsRepository::class,
            PortfolioRepositoryInterface::class,
            PortfolioRepository::class,
        );
    }
}
