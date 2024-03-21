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

Route::get('/', function () {
    return view('step1');
})->name("home");

Route::controller(\App\Http\Controllers\ConversieController::class)
    ->name('conbot.')
    ->group(function () {
        Route::post('next', 'next')->name('next');
        Route::get('scan/{step?}', 'step')->name('step');
    });
