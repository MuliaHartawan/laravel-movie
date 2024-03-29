<?php

use App\Http\Controllers\ActorsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TvController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/{movies}', [MoviesController::class, 'show'])->name('movies.show');

Route::get('/tv', [TvController::class, 'index'])->name('tv.index');
Route::get('/tv/{id}', [TvController::class,'show'])->name('tv.show');

Route::get('/actors', [ActorsController::class, 'index'])->name('actors.index');
Route::get('/actors/{id}', [ActorsController::class, 'show'])->name('actors.show');