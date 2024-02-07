<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;
use Tightenco\Ziggy\Ziggy;

Route::get('/countries', [CountryController::class, 'list'])->middleware('auth')->name('countries');
Route::get('/routes', fn () => response()->json(new Ziggy))->name('routes');
