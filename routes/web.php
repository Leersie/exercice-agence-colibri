<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home-page');
});

Route::get('/inscription', [\App\Http\Controllers\baseController::class, 'inscription'])->name("inscription");

Route::get('/login', [\App\Http\Controllers\baseController::class, 'login'])->name("login");

Route::get('/contact', [\App\Http\Controllers\baseController::class, 'contact'])->name("contact");
