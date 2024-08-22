<?php

use App\Http\Controllers\NontonYuk\Auth\AuthLoginController;
use App\Http\Controllers\NontonYuk\Backend\DashboardController;
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

Route::resource('/', DashboardController::class);

Route::controller(AuthLoginController::class)->group(function (){
    Route::get('/login', 'index');
    Route::post('/login', 'auth_login');
    Route::post('/logout', 'auth_logout');
});