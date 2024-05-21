<?php

use App\Http\Controllers\Guests\CharacterController;
use App\Http\Controllers\Guests\GameController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [GameController::class, 'index'])->name('home');

Route::get('/data', [GameController::class, 'decodeJson'])->name('data');

Route::resource('/character', CharacterController::class);

Route::resource('/item', ItemController::class);
