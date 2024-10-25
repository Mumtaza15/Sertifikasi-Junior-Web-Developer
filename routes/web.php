<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeasiswaController;

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

//Halaman Beranda
Route::get('/', function () {
    return view('beranda');
});

//Halaman Pendaftaran
Route::get('/pendaftaran', [BeasiswaController::class, 'showForm'])->name('showForm');
Route::post('/pendaftaran', [BeasiswaController::class, 'submitForm'])->name('submitForm');

//Halaman Hasil
Route::get('/hasil', [BeasiswaController::class, 'hasil'])->name('hasil');
