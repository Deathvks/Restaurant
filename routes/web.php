<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome.index');
});

use App\Http\Controllers\RestaurantController;

Route::resource('restaurant', RestaurantController::class);
Route::get('/menu/edit/{id}', [RestaurantController::class, 'edit'])->name('restaurant.formEdit');
Route::get('/', function () {
    return view('welcome.index');
})->name('welcome.index');
