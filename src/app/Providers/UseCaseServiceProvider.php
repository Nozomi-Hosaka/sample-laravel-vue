<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
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
