<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GeneratorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/health', [GeneratorController::class, 'health'])->name('api.health');
Route::get('/single', [GeneratorController::class, 'generate'])->name('api.single');
Route::get('/team', [GeneratorController::class, 'generateTeam'])->name('api.team');
Route::get('/stats', [GeneratorController::class, 'statistics'])->name('api.stats');
