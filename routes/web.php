<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sppController;
use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\petugasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\CetakController;
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

// Route::group(['middleware' => 'guestonly'], function () {
    // Route::get('/', [LoginController::class, 'index'])->name('login');
    // Route::post('/', [LoginController::class, 'login']);
// });
// Route::group(['middleware' => 'auth:petugas'], function () {
//     Route::post('/logout', [authController::class, 'logout'])->name('logout');
// });

Route::group(['middleware'=> 'auth:user'],function () {
    Route::get('/dashboard', [homeController::class, 'dashboard'])->name('dashboard');
    Route::resource('/siswa', siswaController::class)->except('show');
    Route::resource('/kelas', kelasController::class)->except('show');
    Route::resource('/spp', sppController::class)->except('show');
    Route::resource('/petugas', petugasController::class)->except('show');
});

// Route::group(['middleware'=> 'guest:user'],function () {
Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('/',[LoginController::class,'login']);
// });

Route::group(['middleware'=> 'auth:user'],function () {
Route::post('/logout',[LoginController::class,'logout']);
});

Route::group(['middleware'=> 'auth:siswa'],function () {
Route::post('/logout',[LoginUserController::class,'logout']);
});

 Route::group(['middleware'=> 'guest:siswa'],function () {
Route::get('/loginSiswa',[LoginUserController::class,'index']);
Route::post('/loginSiswa',[LoginUserController::class,'loginSiswa']);
});


 Route::group(['middleware'=> 'auth:siswa'],function () {
Route::resource('home',UserController::class);
Route::get('/home',[PembayaranController::class,'history']);
});


Route::resource('pembayaran',PembayaranController::class);



Route::get('/pembayaran/create',[PembayaranController::class,'tampil']);

// Route::get('/home',[PembayaranController::class,'history']);


Route::get('/home',[HistoryController::class,'index']);

Route::get('/cetak',[CetakController::class,'index']);
