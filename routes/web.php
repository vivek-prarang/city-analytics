<?php

use App\Http\Controllers\Main\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', [Home::class, 'home']);
Route::get('/cn-images/{code}', [Home::class, 'cnImages']);
Route::get('/redirect/{cityName}', [Home::class, 'redirectToPage']);
Route::get('/{id}/{city}', [Home::class, 'staticCity']);
// Route::get('/cn-images/{code}', [Home::class, 'cnImages']);
