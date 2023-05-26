<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/openings', [MainController::class, 'openings'])->name('openings');
Route::get('/middlegame', [MainController::class, 'middlegame'])->name('middlegame');
Route::get('/endgame', [MainController::class, 'endgame'])->name('endgame');
Route::get('/history',[MainController::class,'history'])->name('history');
Route::get('/rules',[MainController::class,'rules'])->name('rules');
Route::get('/notation',[MainController::class,'notation'])->name('notation');
Route::get('/italiangame',[MainController::class,'italiangame'])->name('italiangame');
Route::get('/develop',[MainController::class,'devpage'])->name('devpage');

/*Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [UserController::class,'create'])->name('register.create');
    Route::post('/register', [UserController::class,'store'])->name('register.store');
    Route::get('/login',[UserController::class,'loginForm'])->name('login.create');
    Route::post('/login',[UserController::class,'login'])->name('login');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
