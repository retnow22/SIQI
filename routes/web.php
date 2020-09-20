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
Route::get('/profil', 'ProfilController@index')->name('profil');
Route::get('/hasil-studi', 'HasilStudiController@index')->name('hasil-studi');
Route::get('/rencana-studi', 'RencanaStudiController@index')->name('rencana-studi');
Route::get('/presensi-peserta', 'PresensiPesertaController@index')->name('presensi-peserta');
Route::get('/pembayaran', 'PembayaranController@index')->name('pembayaran');
Route::get('/profil-pengajar', 'ProfilPengajarController@index')->name('profil-pengajar');
Route::get('/jadwal-mengajar', 'JadwalMengajarController@index')->name('jadwal-mengajar');
Route::get('/hasil-studi-peserta', 'HasilStudiPesertaController@index')->name('hasil-studi-peserta');
Route::get('/data-rombel', 'DataRombelController@index')->name('data-rombel');
Route::get('/laporan-pengajar', 'LaporanPengajarController@index')->name('laporan-pengajar');
Route::get('/kelola-akun', 'KelolaAkunController@index')->name('kelola-akun');
Route::get('/kelola-jadwal', 'KelolaJadwalController@index')->name('kelola-jadwal');
Route::get('/nilai-uas', 'NilaiUasController@index')->name('nilai-uas');
Route::get('/kelola-rombel', 'KelolaRombelController@index')->name('kelola-rombel');
Route::get('/hadiah-pengajar', 'HadiahPengajarController@index')->name('hadiah-pengajar');
Route::get('/data-presensi', 'DataPresensiController@index')->name('data-presensi');
Route::resource('pengajar', 'PengajarController');
Route::resource('peserta', 'PesertaController');
