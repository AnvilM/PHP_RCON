<?php

namespace AnvilM\RCON\Providers;

use AnvilM\RCON\Contracts\Services\RCONServiceContract;
use AnvilM\RCON\Contracts\Services\ResponseServiceContract;
use AnvilM\RCON\Contracts\Services\SocketServiceContract;
use AnvilM\RCON\RCON;
use AnvilM\RCON\Services\RCONService;
use AnvilM\RCON\Services\ResponseService;
use AnvilM\RCON\Services\SocketService;
use Illuminate\Support\ServiceProvider;

class RCONServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(SocketServiceContract::class, SocketService::class);

        $this->app->singleton(ResponseServiceContract::class, ResponseService::class);

        $this->app->bind(RCONServiceContract::class, RCONService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
