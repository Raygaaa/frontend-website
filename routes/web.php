<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
    return view('welcome');
});

Route::get('/latar-belakang', [ProfileController::class, 'showLatarBelakang'])->name('latarbelakang');
Route::get('/dasar-hukum', [ProfileController::class, 'showDasarHukum'])->name('dasar-hukum');
Route::get('/personil', [ProfileController::class, 'showPersonil'])->name('personil');
Route::get('/layanan', [ProfileController::class, 'showLayanan'])->name('layanan');
Route::get('/pk', [ProfileController::class, 'showPk'])->name('pk');
Route::get('/ik', [ProfileController::class, 'showIk'])->name('ik');
Route::get('/kontak', [ProfileController::class, 'showKontak'])->name('kontak');
Route::get('/ksdd', [MonevController::class, 'showKsdd'])->name('ksdd');
Route::get('/ksdpk', [MonevController::class, 'showKsdpk'])->name('ksdpk');
Route::get('/sinergitas', [MonevController::class, 'showSinergitas'])->name('sinergitas');
Route::get('/ksdpl', [MonevController::class, 'showKsdpl'])->name('ksdpl');
Route::get('/ksdll', [MonevController::class, 'showKsdll'])->name('ksdll');
Route::get('/pengajuan', [MonevController::class, 'showPengajuan'])->name('pengajuan');
Route::get('/rekapitulasi', [MonitoringController::class, 'showRekapitulasi'])->name('rekapitulasi');
Route::get('/tkksd', [TkksdController::class, 'showTkksd'])->name('tkksd');
Route::get('/tkksd-award', [TkksdController::class, 'showTkksd-award'])->name('tkksd-award');
Route::get('/kaledoiskop', [TkksdController::class, 'showKaledoiskop'])->name('kaledoiskop');
Route::get('/layananpublik', [HomeController::class, 'showLayananpublik'])->name('layananpublik');
Route::get('/welcome', [HomeController::class, 'showHome'])->name('welcome');

