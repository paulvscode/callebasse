<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntroductionController;

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

Route::get('/', function () {
    return view('game_start');
});

Route::get('/introduction', [IntroductionController::class, 'index'])->name('introduction.start');
Route::get('/introduction-second', [IntroductionController::class, 'second'])->name('introduction.second');
Route::get('/introduction-third', [IntroductionController::class, 'heroesSelection'])->name('heroes-selection');
