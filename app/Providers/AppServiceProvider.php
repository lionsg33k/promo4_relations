<?php

namespace App\Providers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Support\Facades\View;
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
        //
        $countries = Country::all();
        $cities = City::all();

        View::share([
            "countries" => $countries,
            "cities" => $cities
        ]);
    }
}
