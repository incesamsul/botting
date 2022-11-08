<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\General;
use App\Http\Controllers\Home;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\TemaUser;

use App\Http\Controllers\Pelanggan;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;

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



Route::post('/postlogin', [LoginController::class, 'postLogin']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/', [Home::class, 'beranda']);
Route::get('/katalog/{id_percetakan}', [Home::class, 'katalog']);

Route::get('/preview/{nama_tema}', [Home::class, 'preview']);
Route::get('/tentang_aplikasi', [Home::class, 'tentangAplikasi']);

Route::get('/old_home', [Home::class, 'oldHome']);
Route::get('/get_pages/{page}/{nama_tema}', [Home::class, 'getPages']);
Route::get('/get_undangan_pages/{page}', [Home::class, 'getUndanganPages']);

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [LoginController::class, 'register']);
});


// GENERAL CONTROLLER ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:Administrator,percetakan,pelanggan']], function () {

    Route::get('/dashboard', [General::class, 'dashboard']);
    Route::get('/profile', [General::class, 'profile']);
    Route::get('/bantuan', [General::class, 'bantuan']);

    Route::post('/ubah_foto_profile', [General::class, 'ubahFotoProfile']);
    Route::post('/ubah_role', [General::class, 'ubahRole']);
});

// ADMIN ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:user']], function () {
});


// ADMIN ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:Administrator']], function () {
    Route::group(['prefix' => 'admin'], function () {
        // GET REQUEST
        Route::get('/pengguna', [Admin::class, 'pengguna']);
        Route::get('/fetch_data', [Admin::class, 'fetchData']);
        Route::get('/tema', [Admin::class, 'tema']);
        Route::get('/undangan', [Admin::class, 'undangan']);
        Route::post('/create_tema', [Admin::class, 'createTema']);


        // CRUD PENGGUNA
        Route::post('/create_pengguna', [Admin::class, 'createPengguna']);
        Route::post('/update_pengguna', [Admin::class, 'updatePengguna']);
        Route::post('/delete_pengguna', [Admin::class, 'deletePengguna']);
    });
});


// PERCETAKAN ROUTE
Route::group(['middleware' => ['auth', 'ceklevel:pelanggan']], function () {
    Route::group(['prefix' => 'pelanggan'], function () {
        Route::get('/tema', [Pelanggan::class, 'tema']);
        Route::get('/info', [Pelanggan::class, 'info']);
        Route::get('/daftar_tamu', [Pelanggan::class, 'daftarTamu']);
        Route::get('/info/{jenis_info}', [Pelanggan::class, 'info']);
        Route::get('/publish', [Pelanggan::class, 'publish']);
        Route::get('/pilih_tema/{id_tema}', [TemaUser::class, 'store']);
        Route::post('/simpan_domain', [Pelanggan::class, 'simpanDomain']);
        Route::get('/registrasi', [Pelanggan::class, 'registrasi']);
        Route::post('/transaksi', [TransaksiController::class, 'store']);
        Route::get('/detail_transaksi/{reference}', [TransaksiController::class, 'detailTransaksi']);

        // CRUD TAMU
        Route::post('/create_daftar_tamu', [TamuController::class, 'store']);
        Route::post('/update_daftar_tamu', [TamuController::class, 'update']);
        Route::post('/delete_daftar_tamu', [TamuController::class, 'delete']);


        // CRUD INFO
        Route::post('/save_mempelai_pria', [InformasiController::class, 'saveMempelaiPria']);
        Route::post('/save_mempelai_wanita', [InformasiController::class, 'saveMempelaiWanita']);
        Route::post('/save_akad', [InformasiController::class, 'saveAkad']);
        Route::post('/save_resepsi', [InformasiController::class, 'saveResepsi']);
        Route::post('/save_quotes', [InformasiController::class, 'saveQuotes']);
        Route::post('/save_kisah_cinta', [InformasiController::class, 'saveKisahCinta']);
        Route::post('/save_gallery', [InformasiController::class, 'saveGallery']);
    });
});

Route::get('/tamu_undangan', [Pelanggan::class, 'tamuUndangan']);
Route::get('/terima_tamu/{kode_undangan}', [Pelanggan::class, 'terimaTamu']);

Route::get('/{domain}', [Pelanggan::class, 'undangan']);
Route::get('/{domain}/{kode_undangan}', [Pelanggan::class, 'undangan']);
