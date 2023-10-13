<?php

use Illuminate\Support\Facades\Auth;
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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/scholarship', function () {
    return view('scholarship');
})->name('scholarship')->middleware('scholarship');

Route::get('/regional', function () {
    return view('regional');
})->name('regional')->middleware('regional');

Route::get('/provincial', function () {
    return view('provincial');
})->name('provincial')->middleware('provincial');

Route::get('/institutional', function () {
    return view('institutional');
})->name('institutional')->middleware('institutional');