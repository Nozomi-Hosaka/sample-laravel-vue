<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Project\Demo\DemoFactory;
use Project\Demo\DemoFactoryInterface;

class FactoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DemoFactoryInterface::class, DemoFactory::class);
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
