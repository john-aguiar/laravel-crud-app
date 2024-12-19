<?php

use App\Http\Controllers\LivrosController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;


Route::resource('cars', CarController::class);



Route::get('/books/create', [BookController::class, 'create']);
Route::get('/books/read', [BookController::class, 'read']);
Route::get('/books/all', [BookController::class, 'all']);
Route::get('/books/update', [BookController::class, 'update']);
Route::get('/books/delete', [BookController::class, 'delete']);




Route::get('/', function () {
    return view('/layouts.main');
});

Route::get('/books',[App\Http\Controllers\BookController::class,'index'])->name('books.index');
Route::get('/books/add', [App\Http\Controllers\BookController::class,'create'])->name('books.create');
Route::post('/books/store', [App\Http\Controllers\BookController::class,'store'])->name('books.store');


