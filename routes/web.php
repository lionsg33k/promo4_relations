<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get("/world" , [CountryController::class , "index"])->name("country.index");


// countries
Route::post("/country/store" , [CountryController::class , "store"])->name("country.store");


// city

Route::post("/city/store", [CityController::class , "store"])->name("city.store");


//  posts  + comment

Route::get("/posts" , [PostController::class , "index"])->name("post.index");
Route::post("/posts/store" , [PostController::class , "store"])->name("post.store");
Route::post("/posts/like" , [PostController::class , "like"])->name("post.like");
Route::post("/comments/store" , [CommentController::class , "store"])->name("comment.store");
