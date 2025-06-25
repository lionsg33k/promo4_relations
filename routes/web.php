<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get("/world" , [CountryController::class , "index"])->name("country.index");


// countries
Route::post("/country/store" , [CountryController::class , "store"])->name("country.store");


// city

Route::post("/city/store", [CityController::class , "store"])->name("city.store");


//  posts  + comment  O2M

Route::get("/posts" , [PostController::class , "index"])->name("post.index");
Route::post("/posts/store" , [PostController::class , "store"])->name("post.store");
Route::post("/posts/like" , [PostController::class , "like"])->name("post.like");
Route::post("/comments/store" , [CommentController::class , "store"])->name("comment.store");


// student - fields  M2M

Route::get("/school" , [FieldController::class , "index"])->name("school.index");
Route::post("/school/store" , [FieldController::class , "store"])->name("school.store");
Route::post("/student/store" , [StudentController::class , "store"])->name("student.store");
