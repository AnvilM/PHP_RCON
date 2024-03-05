<?php

namespace AnvilM\RCON\Providers;

use Illuminate\Support\ServiceProvider;

class RCONServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        dd("111");
    }
}
