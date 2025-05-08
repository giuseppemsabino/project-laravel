<?php

use App\Http\Controllers\Api\GalaxyController;
use App\Http\Controllers\Api\PhenomenaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

 Route::get('/galaxies', [GalaxyController::class, 'index']);

 Route::get('galaxies/{galaxy}', [GalaxyController::class, 'show']);

 Route::get('/phenomena', [PhenomenaController::class, 'index']);