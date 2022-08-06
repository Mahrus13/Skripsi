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
    return view('pages.home.index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//kriteriaKetua
Route::get('/kriteriaKetua', 'KriteriaKetuaController@index');
Route::post('/add-kriteriaKetua', 'KriteriaKetuaController@store')->name('kriteriaKetua.add');
Route::get('/kriteriaKetua/{id}', 'KriteriaKetuaController@show')->name('kriteriaKetua.getbyid');
Route::put('/kriteriaKetua', 'KriteriaKetuaController@edit')->name('kriteriaKetua.edit');
Route::delete('/kriteriaKetua/{id}', 'KriteriaKetuaController@destroy')->name('kriteriaKetua.delete');
//sub Ketua
Route::get('/SubKetua', 'SubKetuaController@index');
Route::post('/tambah-SubKetua', 'SubKetuaController@store')->name('SubKetua.tambah');
Route::get('/SubKetua/{id}', 'SubKetuaController@show')->name('SubKetua.getbyid');
Route::put('/SubKetua', 'SubKetuaController@edit')->name('SubKetua.edit');
Route::delete('/SubKetua/{id}', 'SubKetuaController@destroy')->name('SubKetua.delete');
//alternatif Ketua
Route::get('/AlternatifKetua', 'AlternatifKetuaController@index');
Route::post('/Add-AlternatifKetua', 'AlternatifKetuaController@store')->name('alternatifKetua.tambah');
Route::get('/AlternatifKetua/{id}', 'AlternatifKetuaController@show')->name('alternatifKetua.getbyid');
Route::put('/AlternatifKetua', 'AlternatifKetuaController@edit')->name('alternatifKetua.edit');
Route::delete('/AlternatifKetua/{id}', 'AlternatifKetuaController@destroy')->name('alternatifKetua.delete');
//penilaian Ketua
Route::get('/PenilaianKetua', 'PenilaianKetuaController@index');
Route::get('/PenilaianKetuaAdmin', 'PenilaianKetuaController@indexAdmin');
Route::post('/Add-PenilaianKetua', 'PenilaianKetuaController@store')->name('penilaianKetua.tambah');
Route::get('/PenilaianKetua/{id}', 'PenilaianKetuaController@show')->name('penilaianKetua.getbyid');
Route::put('/PenilaianKetua', 'PenilaianKetuaController@edit')->name('penilaianKetua.edit');
Route::delete('/PenilaianKetua/{id}', 'PenilaianKetuaController@destroy')->name('penilaianKetua.delete');
Route::delete('/PenilaianKetua', 'PenilaianKetuaController@destroySemua')->name('penilaianKetuaHapus.delete');
//hasil PenilaianKetua
Route::get('/HasilPenilaianKetua', 'LaporanKetuaController@index');
Route::post('/Add-HasilPenilaianKetua', 'PenilaianKetuaController@storeHasil')->name('hasilKetua.add');
Route::post('/Add-HasilPenilaianRiwayatKetua', 'LaporanKetuaController@store')->name('riwayatKetua.add');
//riwayat Ketua
Route::get('/ArsipPenilaianKetua', 'ArsipNilaiKetuaController@index');

//kriteriaAnggota
Route::get('/kriteriaAnggota', 'KriteriaAnggotaController@index');
Route::post('/add-kriteriaAnggota', 'KriteriaAnggotaController@store')->name('kriteriaAnggota.add');
Route::get('/kriteriaAnggota/{id}', 'KriteriaAnggotaController@show')->name('kriteriaAnggota.getbyid');
Route::put('/kriteriaAnggota', 'KriteriaAnggotaController@edit')->name('kriteriaAnggota.edit');
Route::delete('/kriteriaAnggota/{id}', 'KriteriaAnggotaController@destroy')->name('kriteriaAnggota.delete');
//sub anggota
Route::get('/SubAnggota', 'SubAnggotaController@index');
Route::post('/tambah-SubAnggota', 'SubAnggotaController@store')->name('SubAnggota.tambah');
Route::get('/SubAnggota/{id}', 'SubAnggotaController@show')->name('SubAnggota.getbyid');
Route::put('/SubAnggota', 'SubAnggotaController@edit')->name('SubAnggota.edit');
Route::delete('/SubAnggota/{id}', 'SubAnggotaController@destroy')->name('SubAnggota.delete');
//alternatif anggota
Route::get('/AlternatifAnggota', 'AlternatifAnggotaController@index');
Route::post('/Add-AlternatifAnggota', 'AlternatifAnggotaController@store')->name('alternatifAnggota.tambah');
Route::get('/AlternatifAnggota/{id}', 'AlternatifAnggotaController@show')->name('alternatifAnggota.getbyid');
Route::put('/AlternatifAnggota', 'AlternatifAnggotaController@edit')->name('alternatifAnggota.edit');
Route::delete('/AlternatifAnggota/{id}', 'AlternatifAnggotaController@destroy')->name('alternatifAnggota.delete');
//penilaian anggota
Route::get('/PenilaianAnggota', 'PenilaianAnggotaController@index');
Route::get('/PenilaianAnggotaAdmin', 'PenilaianAnggotaController@indexAdmin');
Route::post('/Add-PenilaianAnggota', 'PenilaianAnggotaController@store')->name('penilaianAnggota.tambah');
Route::get('/PenilaianAnggota/{id}', 'PenilaianAnggotaController@show')->name('penilaianAnggota.getbyid');
Route::put('/PenilaianAnggota', 'PenilaianAnggotaController@edit')->name('penilaianAnggota.edit');
Route::delete('/PenilaianAnggota/{id}', 'PenilaianAnggotaController@destroy')->name('penilaianAnggota.delete');
Route::delete('/PenilaianAnggota', 'PenilaianAnggotaController@destroySemua')->name('penilaianAnggotaHapus.delete');
//hasil anggota
Route::get('/HasilPenilaianAnggota', 'LaporanKetuaController@indexAnggota');
Route::post('/Add-HasilPenilaianAnggota', 'PenilaianAnggotaController@storeHasil')->name('hasilAnggota.add');
Route::post('/Add-HasilPenilaianRiwayatAnggota', 'LaporanKetuaController@storeAnggota')->name('riwayatAnggota.add');
//riwayat anggota
Route::get('/ArsipPenilaianAnggota', 'ArsipNilaiKetuaController@indexAnggota');
