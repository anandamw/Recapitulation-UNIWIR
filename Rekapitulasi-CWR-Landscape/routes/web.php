<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PdfController;
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

Route::get('/detail-mahasiswa', [MahasiswaController::class, 'detail']);
Route::get('/mahasiswa/pdf', [PdfController::class, 'view_pdf']);
Route::get('/', [DashboardController::class, 'dashboard']);
Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa']);

// web.php



Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/{id}/update', [MahasiswaController::class, 'update']);



Route::get('/kategori/administrasi/pdf', [KategoriController::class, 'administrasi']);
Route::get('/kategori/manajemen/pdf', [KategoriController::class, 'manajemen']);
Route::get('/kategori/akuntansi/pdf', [KategoriController::class, 'akuntasi']);
Route::get('/kategori/agribisnis/pdf', [KategoriController::class, 'agribisnis']);
Route::get('/kategori/pertanian/pdf', [KategoriController::class, 'pertanian']);
Route::get('/kategori/hukum/pdf', [KategoriController::class, 'hukum']);
Route::get('/kategori/sipil/pdf', [KategoriController::class, 'sipil__']);
Route::get('/kategori/informatika/pdf', [KategoriController::class, 'informatika']);
Route::get('/kategori/kebidanan/pdf', [KategoriController::class, 'kebidanan']);
Route::get('/kategori/keperawatan/pdf', [KategoriController::class, 'keperawatan']);
Route::get('/kategori/ipa/pdf', [KategoriController::class, 'ipa']);
Route::get('/kategori/pgsd/pdf', [KategoriController::class, 'pgsd']);


Route::get('/sesi1', [KategoriController::class, 'sesi1']);
Route::get('/sesi2', [KategoriController::class, 'sesi2']);
