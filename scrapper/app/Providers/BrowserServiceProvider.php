<?php

namespace App\Providers;

use HeadlessChromium\Browser;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class BrowserServiceProvider extends ServiceProvider implements DeferrableProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Browser::class, function () {
            return createBrowser();
        });
    }

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            Browser::class,
        ];
    }

}
