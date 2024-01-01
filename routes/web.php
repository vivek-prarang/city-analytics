<?php

use App\Http\Controllers\Main\Home;
use App\Http\Controllers\Elephant\ElephantController;
use Illuminate\Support\Facades\Route;

// Bilal
Route::prefix('india')->group(function () {

    Route::get('/health', [ElephantController::class, 'stateWiseElephant'])->name('e-health');
    Route::get('/wealth', [ElephantController::class, 'stateWiseElephant'])->name('e-wealth');
    Route::get('/demos', [ElephantController::class, 'stateWiseElephant'])->name('e-demos');
    Route::get('/edus', [ElephantController::class, 'stateWiseElephant'])->name('e-edus');
    Route::get('/govs', [ElephantController::class, 'stateWiseElephant'])->name('e-govs');
    Route::get('/ints', [ElephantController::class, 'stateWiseElephant'])->name('e-ints');
    Route::get('/langs', [ElephantController::class, 'stateWiseElephant'])->name('e-langs');
    Route::get('/medias', [ElephantController::class, 'stateWiseElephant'])->name('e-medias');
    Route::get('/urbs', [ElephantController::class, 'stateWiseElephant'])->name('e-urbs');
    Route::get('/works', [ElephantController::class, 'stateWiseElephant'])->name('e-works');
    Route::get('/nature', [ElephantController::class, 'stateWiseElephant'])->name('nature');
    Route::get('/culture', [ElephantController::class, 'stateWiseElephant'])->name('culture');

});

// Vivake
Route::get('/', [Home::class, 'home']);
Route::get('/cn-images/{code}', [Home::class, 'cnImages']);
Route::get('/redirect/{cityName}', [Home::class, 'redirectToPage']);
Route::get('/{id}/{city}', [Home::class, 'staticCity']);
// Route::get('/cn-images/{code}', [Home::class, 'cnImages']);

