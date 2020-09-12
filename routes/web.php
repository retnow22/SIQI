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