<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\ContentController::class, 'index']);

Route::get('/tournaments', [\App\Http\Controllers\ContentController::class, 'tournaments']);

Route::prefix('tournaments')->group(function () {
    Route::get('/{path}', [\App\Http\Controllers\ContentController::class, 'getPage']);
});
