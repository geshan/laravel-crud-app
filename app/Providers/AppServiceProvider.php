<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Flagsmith\Flagsmith;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Flagsmith::class, function ($app) {
            return new Flagsmith(env('FLAGSMITH_API_KEY'));
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
