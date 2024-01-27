<?php

use App\Http\Controllers\dashboardController;
use App\Models\laporan;
use App\Models\services;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\merkController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\ruanganController;
use App\Http\Controllers\servicesController;
use App\Http\Controllers\indikatorController;

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

Route::get('/login', [loginController::class, 'index']);
Route::post('/login', [loginController::class, 'loginAuth'])->name('login');
Route::post('/logout', [loginController::class, 'logout']);

// Dashboard
Route::get('/laporan-it/dashboard', [dashboardController::class,'dashboard_laporan'])->middleware('auth');

// indikator
Route::get('/', [indikatorController::class,'index'])->middleware('auth');
Route::get('/indikator-mutu', [indikatorController::class,'indikator_mutu'])->middleware('auth');
Route::get('/indikator-mutu-atem', [indikatorController::class,'atem'])->middleware('auth');
Route::get('/indikator-mutu-driver', [indikatorController::class,'driver'])->middleware('auth');
Route::get('/indikator-mutu-it', [indikatorController::class,'it'])->middleware('auth');
Route::get('/indikator-mutu-kesling', [indikatorController::class,'kesling'])->middleware('auth');
Route::get('/indikator-mutu-security', [indikatorController::class,'security'])->middleware('auth');
Route::get('/indikator-mutu-upsrs', [indikatorController::class,'upsrs'])->middleware('auth');
Route::get('/indikator-mutu-keuangan', [indikatorController::class,'keuangan'])->middleware('auth');
Route::get('/indikator-mutu-sdm', [indikatorController::class,'sdm'])->middleware('auth');
// Route::get('/indikator-mutu-atem/dashboard', [indikatorController::class,'dashboard_laporan'])->middleware('auth');

// laporan
Route::get('/laporan-it', function () {
    return view('laporan-it.index');
})->name('indikator_mutu.index')->middleware('auth');

Route::get('/merk/{id}', [servicesController::class, 'getMerk'])->middleware('auth');
// Route::get('/laporan-service', [servicesController::class,'index'])->middleware('auth');
Route::resource('tambah-merk', merkController::class)->middleware('auth')->middleware('auth');
Route::resource('laporan-service', servicesController::class)->middleware('auth');
Route::resource('tambah-ruangan', ruanganController::class)->middleware('auth');


Route::resource('laporan-it', laporanController::class)->middleware('auth');


