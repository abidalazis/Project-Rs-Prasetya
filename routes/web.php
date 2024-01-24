<?php

use App\Http\Controllers\indikatorController;
use App\Models\laporan;
use App\Models\services;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\merkController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\ruanganController;
use App\Http\Controllers\servicesController;

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


// Route::get('/', function () {
//     return view('dashboard.index');
// })->name('dashboard');

// indikator
Route::get('/', [indikatorController::class,'index']);
Route::get('/indikator-mutu', [indikatorController::class,'indikator_mutu']);
Route::get('/indikator-mutu-atem', [indikatorController::class,'atem']);
Route::get('/indikator-mutu-atem/dashboard', [indikatorController::class,'dashboard_laporan']);

// laporan
Route::get('/laporan-it', function () {
    return view('laporan-it.index');
})->name('indikator_mutu.index');

Route::get('/merk/{id}', [servicesController::class, 'getMerk']);
// Route::get('/laporan-service', [servicesController::class,'index']);
Route::resource('tambah-merk', merkController::class);
Route::resource('laporan-service', servicesController::class);
Route::resource('tambah-ruangan', ruanganController::class);


Route::resource('laporan-it', laporanController::class);

