<?php

namespace Shadercloud\LinkTrackingHistory;

use Illuminate\Support\ServiceProvider;
use Shadercloud\LinkTrackingHistory\Middleware\RecordLinkHistory;

class LinkTrackingHistoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->app['router']->pushMiddlewareToGroup('web', RecordLinkHistory::class);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'linktrackinghistory');

        // Register the main class to use with the facade
        $this->app->singleton('linktrackinghistory', function () {
            return new LinkTrackingHistory;
        });
    }
}
