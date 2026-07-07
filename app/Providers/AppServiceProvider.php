<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        try {
            $settings = \App\Models\Setting::all()->pluck('value', 'key');
            \Illuminate\Support\Facades\View::share('global_settings', $settings);
        } catch (\Exception $e) {
            // Ignore during initial migration/seeding when table doesn't exist
            \Illuminate\Support\Facades\View::share('global_settings', collect());
        }
    }
}
