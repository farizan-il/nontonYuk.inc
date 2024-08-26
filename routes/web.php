<?php

use App\Http\Controllers\NontonYuk\Auth\AuthLoginController;
use App\Http\Controllers\NontonYuk\Backend\DaftarFilmController;
use App\Http\Controllers\NontonYuk\Backend\DashboardController;
use App\Http\Controllers\NontonYuk\Backend\GenreFilmController;
use App\Http\Controllers\NontonYuk\Backend\JadwalTayangController;
use App\Http\Controllers\NontonYuk\Backend\KategoriBioskopController;
use App\Http\Controllers\NontonYuk\Backend\KelasTeaterController;
use App\Http\Controllers\NontonYuk\Backend\KelolaBioskopController;
use App\Http\Controllers\NontonYuk\Backend\KelolaLokasiController;
use App\Http\Controllers\NontonYuk\Backend\KelolaTeaterController;
use App\Models\DaftarBioskop;
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

Route::resource('/', AuthLoginController::class);
Route::controller(AuthLoginController::class)->group(function (){
    Route::get('/login', 'index');
    Route::post('/login', 'auth_login');
    Route::post('/logout', 'auth_logout');
});

Route::resource('/dashboard', DashboardController::class);
Route::resource('/kelolalokasi', KelolaLokasiController::class);
Route::resource('/daftarfilm', DaftarFilmController::class);
Route::resource('/kategorifilm', GenreFilmController::class);
Route::resource('/kategoribioskop', KategoriBioskopController::class);
Route::resource('/daftarbioskop', KelolaBioskopController::class);
Route::resource('/kelasteater', KelasTeaterController::class);
Route::resource('/kelolateater', KelolaTeaterController::class);
Route::resource('/jadwaltayang', JadwalTayangController::class);