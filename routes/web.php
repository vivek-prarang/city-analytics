<?php

use App\Http\Controllers\Main\Home;
use App\Http\Controllers\Elephant\ElephantController;
use Illuminate\Support\Facades\Route;

// Bilal
Route::get('/india/health', [ElephantController::class, 'stateWiseElephant'])->name('e-health');
Route::get('/india/wealth', [ElephantController::class, 'stateWiseElephant'])->name('e-wealth');
Route::get('/india/demos', [ElephantController::class, 'stateWiseElephant'])->name('e-demos');
Route::get('/india/edus', [ElephantController::class, 'stateWiseElephant'])->name('e-edus');
Route::get('/india/govs', [ElephantController::class, 'stateWiseElephant'])->name('e-govs');
Route::get('/india/ints', [ElephantController::class, 'stateWiseElephant'])->name('e-ints');
Route::get('/india/langs', [ElephantController::class, 'stateWiseElephant'])->name('e-langs');
Route::get('/india/medias', [ElephantController::class, 'stateWiseElephant'])->name('e-medias');

// Vivake
Route::get('/', [Home::class, 'home']);
Route::get('/cn-images/{code}', [Home::class, 'cnImages']);
Route::get('/redirect/{cityName}', [Home::class, 'redirectToPage']);
Route::get('/{id}/{city}', [Home::class, 'staticCity']);
// Route::get('/cn-images/{code}', [Home::class, 'cnImages']);

