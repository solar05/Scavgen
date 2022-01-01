<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneratorController;
use App\Http\Controllers\PageController;

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

Route::get('/', [GeneratorController::class, 'generate'])->name('single');
Route::get('/team', [GeneratorController::class, 'generateTeam'])->name('team');
Route::get('/stats', [GeneratorController::class, 'statistics'])->name('stats');
Route::get('/robots.txt', [PageController::class, 'robots'])->name('robots');
