<?php

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

use App\Http\Controllers\ViewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('praktikum1', function () {
    return view('prak1web');
});

Route::get('tugas4', function () {
    return view('tug4');
});

Route::get('praktikum2', 'ViewController@showPraktikum2');
Route::get('etspweb', 'ViewController@showETS');
Route::get('show', 'ViewController@showForm');
Route::get('recursive', 'ViewController@recursiveFunc');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');

//tugas minggu 13
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');

//praktikum minggu 14 tabel beras
Route::get('/beras','BerasController@index');
Route::get('/beras/cari','BerasController@cari');
Route::get('/beras/tambah','BerasController@tambah');
Route::post('/beras/store','BerasController@store');
Route::get('/beras/edit/{id}','BerasController@edit');
Route::post('/beras/update','BerasController@update');
Route::get('/beras/hapus/{id}','BerasController@hapus');
Route::get('/beras/view/{id}','BerasController@detail');

