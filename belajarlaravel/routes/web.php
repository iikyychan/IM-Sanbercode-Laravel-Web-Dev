<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControlle;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeControlle::class,'index']);
Route::get('/', [AuthController::class,'signup']);
Route::get('/ signup', [AuthController::class,'welcome']);

