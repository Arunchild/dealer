<?php

namespace Dealer;

use Illuminate\Support\ServiceProvider;

class DealerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'company');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/dealer'),
        ]);
    }

    public function register(){

    }
}