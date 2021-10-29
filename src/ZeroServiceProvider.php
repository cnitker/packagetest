<?php

namespace Zeroandone\Packagetest;

use Illuminate\Support\ServiceProvider;

class ZeroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('zero',function (){
            return new Zero();
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
