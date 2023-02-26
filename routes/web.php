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

Route::get('/latar-belakang', [ProfileController::class, 'showLatarBelakang'])->name('latar-belakang');
Route::get('/dasar-hukum', [ProfileController::class, 'showDasarHukum'])->name('dasar-hukum');
Route::get('/welcome', [HomeController::class, 'showHome'])->name('welcome');
