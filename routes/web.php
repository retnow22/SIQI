<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hasil-studi', 'HasilStudiController@index')->name('hasil-studi');
Route::get('/rencana-studi', 'RencanaStudiController@index')->name('rencana-studi');
Route::get('/presensi-peserta', 'PresensiPesertaController@index')->name('presensi-peserta');
Route::get('/pembayaran', 'PembayaranController@index')->name('pembayaran');
Route::get('/profil-pengajar', 'ProfilPengajarController@index')->name('profil-pengajar');
Route::get('/jadwal-mengajar', 'JadwalMengajarController@index')->name('jadwal-mengajar');
Route::get('/hasil-studi-peserta', 'HasilStudiPesertaController@index')->name('hasil-studi-peserta');
Route::get('/data-rombel', 'DataRombelController@index')->name('data-rombel');
Route::get('/laporan-pengajar', 'LaporanPengajarController@index')->name('laporan-pengajar');
Route::get('/kelola-rombel', 'KelolaRombelController@index')->name('kelola-rombel');
Route::get('/data-presensi', 'DataPresensiController@index')->name('data-presensi');
Route::get('/profil-pengajar', 'ProfilPengajarController@profil')->name('pengajar.profil');
Route::resource('pengajar', 'PengajarController');
Route::resource('peserta', 'PesertaController');
Route::resource('nilai', 'NilaiController');
Route::resource('jadwal', 'JadwalController');
Route::resource('kafalah', 'KafalahController');
Route::resource('akun', 'AkunController');
Route::put('/profil-pengajar/{id}', 'ProfilPengajarController@update')->name('pengajar.updateprofil');
Route::patch('/profil-pengajar/{id}', 'ProfilPengajarController@update')->name('pengajar.updateprofil');