<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;

Route::get("/world" , [CountryController::class , "index"])->name("country.index");


// countries
Route::post("/country/store" , [CountryController::class , "store"])->name("country.store");


// city

Route::post("/city/store", [CityController::class , "store"])->name("city.store");