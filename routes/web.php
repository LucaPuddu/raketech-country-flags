<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/{path?}', 'home')
    ->middleware('auth')
    ->name('home')
    ->where('path', '[\/\w\.-]*');

//Route::get('/test', function () {
//    if (! auth()->check()) {
//        return response('You are not logged in.');
//    }
//
//    $user = auth()->user();
//    $name = $user->name ?? 'User';
//    $email = $user->email ?? '';
//
//    return response("Hello {$name}! Your email address is {$email}.");
//});
