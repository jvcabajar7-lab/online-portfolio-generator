<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // Make sure this use statement is at the top

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
   public function register(): void
    {
        // Keep whatever is already here
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Add this block inside the existing boot method
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}