<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;
use App\Http\Controllers\genreController;
use App\Http\Controllers\filmController;
use App\Http\Controllers\kritikController;

Route::get('/',[HomeController::class, 'home']);
Route::get('/register',[HomeController::class, 'register']);
Route::post('/welcome',[AuthController::class, 'submit']);
Route::get('/data-table',[HomeController::class, 'dataTable']);
Route::get('/table',[HomeController::class, 'table']);

Route::middleware(['auth'])->group(function () {
//CRUD function
//Create data on Cast table
//Route to form input new Cast table

Route::get('/cast/create',[CastController::class, 'create']);

//Route to save data into database

Route::post('/cast', [CastController::class, 'store']);

//Route for reading all data in cast table
Route::get('/cast', [CastController::class, 'index']);

//Route to show cast detail by cast id
Route::get('/cast/{id}',[CastController::class, 'show']);

//update data cast
Route::get('/cast/{id}/edit',[CastController::class, 'edit']);
Route::put('/cast/{id}',[CastController::class, 'update']);

//delete data cast
Route::delete('/cast/{id}',[CastController::class, 'destroy']);

//CRUD genre
Route::get('/genre/create',[genreController::class, 'create']);

//Route to save data into database

Route::post('/genre', [genreController::class, 'store']);

//Route for reading all data in genre table
Route::get('/genre', [genreController::class, 'index']);

//update data genre
Route::get('/genre/{id}/edit',[genreController::class, 'edit']);
Route::put('/genre/{id}',[genreController::class, 'update']);

Route::delete('/genre/{id}',[genreController::class, 'destroy']);
Route::get('/genre/{id}',[genreController::class, 'show']);

Route::post('/kritik/{film}', [KritikController::class, 'store'])->name('kritik.store');

});

Route::get('/genre', [genreController::class, 'index']);
Route::resource('film', filmController::class);
// Route::get('/film', [filmController::class, 'index']);
// Route::get('/film/{id}', [filmController::class, 'show']);

Auth::routes();
