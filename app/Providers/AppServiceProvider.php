<?php

namespace App\Providers;


use App\Http\Interfaces\UserCovidRepository;
use App\Http\Repositories\CovidRepository;
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
        $this->app->bind(UserCovidRepository::class, CovidRepository::class);
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
