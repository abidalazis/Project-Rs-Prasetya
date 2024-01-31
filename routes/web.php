<?php

use App\Models\laporan;
use App\Models\services;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItController;
use App\Http\Controllers\OkController;
use App\Http\Controllers\RmController;
use App\Http\Controllers\HnmController;
use App\Http\Controllers\IcuController;
use App\Http\Controllers\IgdController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\Lt2Controller;
use App\Http\Controllers\Lt4Controller;
use App\Http\Controllers\Lt5Controller;
use App\Http\Controllers\Lt6Controller;
use App\Http\Controllers\SdmController;
use App\Http\Controllers\AtemController;
use App\Http\Controllers\CssdController;
use App\Http\Controllers\GiziController;
use App\Http\Controllers\merkController;
use App\Http\Controllers\UangController;
use App\Http\Controllers\KaberController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RajalController;
use App\Http\Controllers\RehabController;
use App\Http\Controllers\UpsrsController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\LondriController;
use App\Http\Controllers\PerinaController;
use App\Http\Controllers\CasemixController;
use App\Http\Controllers\FarmasiController;
use App\Http\Controllers\KeslingController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\ruanganController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\servicesController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\indikatorController;
use App\Http\Controllers\RadiologiController;

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
Route::get('/indikator-mutu-humas', [indikatorController::class,'humas'])->middleware('auth');
Route::get('/indikator-mutu-cssd', [indikatorController::class,'cssd'])->middleware('auth');
Route::get('/indikator-mutu-icu', [indikatorController::class,'icu'])->middleware('auth');
Route::get('/indikator-mutu-igd', [indikatorController::class,'igd'])->middleware('auth');
Route::get('/indikator-mutu-kaber', [indikatorController::class,'kaber'])->middleware('auth');
Route::get('/indikator-mutu-ok', [indikatorController::class,'ok'])->middleware('auth');
Route::get('/indikator-mutu-londri', [indikatorController::class,'londri'])->middleware('auth');
Route::get('/indikator-mutu-lt2', [indikatorController::class,'lt2'])->middleware('auth');
Route::get('/indikator-mutu-lt4', [indikatorController::class,'lt4'])->middleware('auth');
Route::get('/indikator-mutu-lt5', [indikatorController::class,'lt5'])->middleware('auth');
Route::get('/indikator-mutu-lt6', [indikatorController::class,'lt6'])->middleware('auth');
Route::get('/indikator-mutu-perina', [indikatorController::class,'perina'])->middleware('auth');
Route::get('/indikator-mutu-casemix', [indikatorController::class,'casemix'])->middleware('auth');
Route::get('/indikator-mutu-farmasi', [indikatorController::class,'rajal'])->middleware('auth');
Route::get('/indikator-mutu-gizi', [indikatorController::class,'gizi'])->middleware('auth');
Route::get('/indikator-mutu-lab', [indikatorController::class,'lab'])->middleware('auth');
Route::get('/indikator-mutu-radiologi', [indikatorController::class,'radiologi'])->middleware('auth');
Route::get('/indikator-mutu-rehab', [indikatorController::class,'rehab'])->middleware('auth');
Route::get('/indikator-mutu-rm', [indikatorController::class,'rm'])->middleware('auth');
// Route::get('/indikator-mutu-atem/dashboard', [indikatorController::class,'dashboard_laporan'])->middleware('auth');

// Dashboard Admin
Route::resource('tambah-atem', AtemController::class)->middleware('auth');
Route::resource('tambah-casemix', CasemixController::class)->middleware('auth');
Route::resource('tambah-cssd', CssdController::class)->middleware('auth');
Route::resource('tambah-driver', DriverController::class)->middleware('auth');
Route::resource('tambah-farmasi', FarmasiController::class)->middleware('auth');
Route::resource('tambah-gizi', GiziController::class)->middleware('auth');
Route::resource('tambah-hnm', HnmController::class)->middleware('auth');
Route::resource('tambah-icu', IcuController::class)->middleware('auth');
Route::resource('tambah-igd', IgdController::class)->middleware('auth');
Route::resource('tambah-kaber', KaberController::class)->middleware('auth');
Route::resource('tambah-kesling', KeslingController::class)->middleware('auth');
Route::resource('tambah-lab', LabController::class)->middleware('auth');
Route::resource('tambah-londri', LondriController::class)->middleware('auth');
Route::resource('tambah-lt2', Lt2Controller::class)->middleware('auth');
Route::resource('tambah-lt4', Lt4Controller::class)->middleware('auth');
Route::resource('tambah-lt5', Lt5Controller::class)->middleware('auth');
Route::resource('tambah-lt6', Lt6Controller::class)->middleware('auth');
Route::resource('tambah-ok', OkController::class)->middleware('auth');
Route::resource('tambah-perina', PerinaController::class)->middleware('auth');
Route::resource('tambah-radiologi', RadiologiController::class)->middleware('auth');
Route::resource('tambah-rajal', RajalController::class)->middleware('auth');
Route::resource('tambah-sdm', SdmController::class)->middleware('auth');
Route::resource('tambah-security', SecurityController::class)->middleware('auth');
Route::resource('tambah-uang', UangController::class)->middleware('auth');
Route::resource('tambah-upsrs', UpsrsController::class)->middleware('auth');
Route::resource('tambah-it', ItController::class)->middleware('auth');
Route::resource('tambah-rm', RmController::class)->middleware('auth');
Route::resource('tambah-rehab', RehabController::class)->middleware('auth');



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


