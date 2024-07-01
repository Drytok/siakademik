<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\muridController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\WaliMuridController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\TahunAjaranController;
use App\Http\Controllers\JenisNilaiController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;


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

Route::get('/', function () {
    return view('login');
});


Route::post ('/postlogin', 'App\Http\Controllers\PageController@postlogin')->name('postlogin');

Route::resource('/home', HomeController::class);
Route::resource('/murid', muridController::class);
Route::resource('/guru', GuruController::class);
Route::resource('/mata_pelajaran', MataPelajaranController::class);
Route::resource('/nilai', NilaiController::class);
Route::resource('/kelas', KelasController::class);
Route::resource('/wali_murid', WaliMuridController::class);
Route::resource('/jadwal_pelajaran', JadwalController::class);
Route::resource('/tahun_ajaran', TahunAjaranController::class);
Route::resource('/jenis_nilai', JenisNilaiController::class);
Route::resource('/ekstrakurikuler', EkstrakurikulerController::class);
Route::resource('/pegawai', PegawaiController::class);
Route::resource('/pengguna', PenggunaController::class);

//report
Route::get('/cetakmurid', [muridController::class,'downloadpdf']);
Route::get('/cetakguru', [GuruController::class,'downloadpdf']);
Route::get('/cetakmapel', [MataPelajaranController::class,'downloadpdf']);
Route::get('/cetaknilai', [NilaiController::class,'downloadpdf']);
Route::get('/cetakkelas', [KelasController::class,'downloadpdf']);
Route::get('/cetakwalimurid', [WaliMuridController::class,'downloadpdf']);
Route::get('/cetakjadwal', [JadwalController::class,'downloadpdf']);
Route::get('/cetaktahunajaran', [TahunAjaranController::class,'downloadpdf']);
Route::get('/cetakjenisnilai', [JenisNilaiController::class,'downloadpdf']);
Route::get('/cetakekstra', [EkstrakurikulerController::class,'downloadpdf']);
Route::get('/cetakpegawai', [PegawaiController::class,'downloadpdf']);
Route::get('/cetakpengguna', [PenggunaController::class,'downloadpdf']);
