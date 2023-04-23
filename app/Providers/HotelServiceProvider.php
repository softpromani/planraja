<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repo\HotelService;


class HotelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('HotelService', function($app){
            return new HotelService();
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
