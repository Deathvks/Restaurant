<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\RestaurantController;

Route::resource('restaurant', RestaurantController::class);
