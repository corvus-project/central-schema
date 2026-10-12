<?php

declare(strict_types=1);

namespace CentralSchema\CentralSchema;

use Illuminate\Support\ServiceProvider;

class CentralSchemaServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/central-schema.php', 'central-schema');

        $this->app->singleton(CentralSchema::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/central-schema.php' => config_path('central-schema.php'),
        ], ['central-schema', 'central-schema-config']);

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
