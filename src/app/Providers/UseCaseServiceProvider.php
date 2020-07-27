<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Project\Demo\Command\UseCases\CreateDemo\CreateDemo;
use Project\Demo\Command\UseCases\CreateDemo\CreateDemoInterface;
use Project\Demo\Command\UseCases\DeleteDemo\DeleteDemo;
use Project\Demo\Command\UseCases\DeleteDemo\DeleteDemoInterface;
use Project\Demo\Command\UseCases\UpdateDemo\UpdateDemo;
use Project\Demo\Command\UseCases\UpdateDemo\UpdateDemoInterface;
use Project\Demo\Query\UseCases\GetDemoList\GetDemoQuery;
use Project\Demo\Query\UseCases\GetDemoList\GetDemoQueryInterface;

class UseCaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(GetDemoQueryInterface::class, GetDemoQuery::class);
        $this->app->bind(CreateDemoInterface::class, CreateDemo::class);
        $this->app->bind(UpdateDemoInterface::class, UpdateDemo::class);
        $this->app->bind(DeleteDemoInterface::class, DeleteDemo::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
