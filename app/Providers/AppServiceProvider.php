<?php

namespace App\Providers;

use App\Services\ShapeService;
use App\Services\SquareService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ShapeService::class, function ()
        {
            return new \App\Services\SquareService;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
