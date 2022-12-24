<?php

namespace AsayHome\AsayTickets;

use Illuminate\Support\ServiceProvider;

class AsayTicketsProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/asay-tickets.php' => config_path('asay-tickets.php'),
        ]);
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'asay-tickets');
        // $this->loadViewsFrom(__DIR__ . '/../resources/views', 'asay-tickets');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/asay-tickets.php',
            'asay-tickets'
        );
    }
}
