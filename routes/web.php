<?php

use App\Http\Controllers\Admin\GalaxyController as AdminGalaxyController;
use App\Http\Controllers\Admin\PhenomenaController as AdminPhenomenaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('galaxies', AdminGalaxyController::class)
    ->middleware(['auth', 'verified']);

Route::resource('phenomena', AdminPhenomenaController::class)
    //aggiungo questi parametri perche cosi la route el url si aspetta Phenomena in singolare e ha piu senso (cosi e acnhe uguale a quello di galaxy)
    ->parameters([
        'phenomena' => 'phenomenon',
    ])->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';
