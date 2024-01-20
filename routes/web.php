<?php

use App\Http\Controllers\merkController;
use App\Http\Controllers\ruanganController;
use App\Http\Controllers\servicesController;
use App\Models\services;
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
    return view('home',[
        "tittle" => "home"
        ]);
});
Route::get('/indikator-mutu', function () {
    return view('dashboard.index',[
        "tittle" => "home"
        ]);
});
Route::get('/merk/{id}',[servicesController::class,'getMerk']);
// Route::get('/laporan-service', [servicesController::class,'index']);
Route::resource('laporan-service',servicesController::class);
Route::resource('tambah-ruangan',ruanganController::class);
Route::resource('tambah-merk',merkController::class);