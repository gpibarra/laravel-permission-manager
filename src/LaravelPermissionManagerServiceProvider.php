<?php

namespace gpibarra\LaravelPermissionManager;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Route;

class LaravelPermissionManagerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //VIEWS
        // - first the published views (in case they have any changes)
        $this->loadViewsFrom(resource_path('views/vendor/gpibarra/LaravelPermissionManager'), 'LaravelPermissionManager');
        // - then the stock views that come with the package, in case a published view might be missing
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'LaravelPermissionManager');

        // publish lang files
        $this->publishes([__DIR__.'/resources/lang' => resource_path('lang/vendor/gpibarra')], 'lang');

        $this->loadTranslationsFrom(realpath(__DIR__.'/resources/lang'), 'gpibarra');

        // publish views
        $this->publishes([__DIR__.'/resources/views' => resource_path('views/vendor/gpibarra/LaravelPermissionManager')], 'views');

//        // publish public PermissionManager assets
//        $this->publishes([__DIR__.'/public' => public_path('vendor/gpibarra')], 'public');

        //CONFIG
        // use the vendor configuration file as fallback
        $this->mergeConfigFrom(
            __DIR__.'/config/LaravelPermissionManager.php', 'LaravelPermissionManager'
        );

        // publish config file
        $this->publishes([__DIR__.'/config' => config_path()], 'config');


        //Routes
        $routeFilePath = '/routes/laravelpermissionmanager.php';
        // by default, use the routes file provided in vendor
        $routeFilePathInUse = __DIR__.$routeFilePath;

        // but if there's a file with the same name in routes/backpack, use that one
        if (file_exists(base_path().$routeFilePath)) {
            $routeFilePathInUse = base_path().$routeFilePath;
        }

        $this->loadRoutesFrom($routeFilePathInUse);


//        //Helpers
//        require_once __DIR__.'/helpers.php';

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
