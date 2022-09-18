<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {

    Route::post('/import/tournament', [App\Http\Controllers\Api\ImportTournamentController::class, 'getImportSave']);

    Route::get('/import/tournament-update', [App\Http\Controllers\Api\ImportTournamentController::class, 'getImportUpdate']);
});
