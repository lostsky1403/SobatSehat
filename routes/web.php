<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SuksesController;


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



Route::get('/', [IndexController::class, 'index']);
Route::get('/index', [IndexController::class, 'index']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route artikel
Route::get('/artikel', [App\Http\Controllers\ArtikelController::class, 'index'])->name('artikel');

//route kegiatan
Route::get('/kegiatan', [App\Http\Controllers\KegiatanController::class, 'index'])->name('kegiatan');

// route lokasi
Route::get('/lokasi', [App\Http\Controllers\LokasiController::class, 'index'])->name('lokasi');

//route form
Route::get('/form-jadwal', [App\Http\Controllers\FormController::class, 'index'])->name('form-jadwal');

// route form sukses
Route::get('/sukses', [App\Http\Controllers\SuksesController::class, 'index'])->name('sukses');


