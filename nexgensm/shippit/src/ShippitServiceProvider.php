<?php

namespace Nexgensm\Shippit;

use Illuminate\Support\ServiceProvider;

class ShippitServiceProvider extends ServiceProvider
{
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','shippit');
    }
    public function register()
    {

        //
    }
}
