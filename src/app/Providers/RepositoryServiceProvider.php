<?php

namespace App\Providers;

use App\Repositories\DemoRepository;
use Illuminate\Support\ServiceProvider;
use Project\Repositories\DemoRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DemoRepositoryInterface::class, DemoRepository::class);
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
