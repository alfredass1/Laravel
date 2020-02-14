<?php

namespace App\Providers;
use Gate;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Gate::define('redaguoti', function ($user, $ad) {
            return $user->id == $ad->userID;

        });

        Gate::define('trinti', function ($user, $ad) {
            return $user->id == $ad->userID;

        });
    }
}
