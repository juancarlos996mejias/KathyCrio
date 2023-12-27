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
    return view('welcome');
});

Route::get('/quienesSomos', function () {
    return view('quienesSomos');
});

Route::get('/criolipolisis', function () {
    return view('criolipolisis');
});

Route::get('/enfermeria', function () {
    return view('enfermeria');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/masajes', function () {
    return view('masajes');
});

Route::get('/contacto', function () {
    return view('contacto');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
