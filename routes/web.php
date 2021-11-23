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

Route::get('/view', function () {
    return view('sampleview');
});

Route::get('pegawai','pegawaicontroller@index');
Route::get('kalkulator','kalkulator@index');
Route::get('kalkulator1','kalkulator@penjumlahan')->name('tmbh');
Route::get('kalkulator2','kalkulator@pengurangan')->name('krng');
Route::get('kalkulator3','kalkulator@perkalian')->name('kali');
Route::get('kalkulator4','kalkulator@pembagian')->name('bagi');
Route::get('kalkulator5','kalkulator@modulus')->name('mod');

//tampil data
Route::get('dosen','DosenController@index')->name('dosenlist');

//tambah data
Route::get('tambah','DosenController@create')->name('tambah');
Route::post('simpan','DosenController@store')->name('simpan');

//hapus
Route::get('/DosenModel/{id}/destroy','DosenController@destroy')->name('hapus');

//edit
Route::get('/DosenModel/{id}/edit','DosenController@edit');
Route::post('/DosenModel/{id}/update','DosenController@update');
