<?php

use App\Http\Controllers\Main\Home;
use App\Http\Controllers\Elephant\ElephantController;
use Illuminate\Support\Facades\Route;

// Bilal
Route::get('/india/health', [ElephantController::class, 'stateWiseElephant'])->name('stateElelphant');

// Vivake
Route::get('/', [Home::class, 'home']);
Route::get('/cn-images/{code}', [Home::class, 'cnImages']);
Route::get('/redirect/{cityName}', [Home::class, 'redirectToPage']);
Route::get('/{id}/{city}', [Home::class, 'staticCity']);
// Route::get('/cn-images/{code}', [Home::class, 'cnImages']);

