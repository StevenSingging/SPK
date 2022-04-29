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
    return view('dashboard');
});

Route::get('/datakriteria','\App\Http\Controllers\KriteriaController@index')->name('kriteria');
Route::get('/datapeserta','\App\Http\Controllers\PesertaController@index')->name('peserta');
Route::get('/datapenilaian','\App\Http\Controllers\PenilaianController@index')->name('penilaian');
Route::post('/simpandata','\App\Http\Controllers\PesertaController@simpandata')->name('simpandata');