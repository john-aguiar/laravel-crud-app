<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;


Route::resource('cars', CarController::class);
Route::resource('books', BookController::class);

Route::get('/', function () {
    return view('choise');
});




