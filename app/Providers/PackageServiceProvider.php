<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repo\PackageService;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('PackageService', function($app){
            return new PackageService();
        });
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
