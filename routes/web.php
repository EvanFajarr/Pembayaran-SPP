<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sppController;
use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\petugasController;

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

Route::group(['middleware' => 'guestonly'], function () {
    Route::get('/', [authController::class, 'login'])->name('login');
    Route::post('/', [authController::class, 'authenticate'])->name('login.authenticate');
});
Route::group(['middleware' => 'auth:petugas'], function () {
    Route::post('/logout', [authController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => 'auth:petugas'], function () {
    Route::get('/dashboard', [homeController::class, 'dashboard'])->name('dashboard');
    Route::resource('/siswa', siswaController::class)->except('show');
    Route::resource('/kelas', kelasController::class)->except('show');
    Route::resource('/spp', sppController::class)->except('show');
    Route::resource('/petugas', petugasController::class)->except('show');
});
