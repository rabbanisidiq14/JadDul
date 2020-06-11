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


Auth::routes();

Route::redirect('/','/home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about','HomeController@about');
Route::get('/ruangan/{id_ruangan}/hari/{hari}','RuanganController@index');
Route::get('/kelas/{id_kelas}/hari/{hari}','KelasController@index');
Route::get('/guru/{id_guru}','GuruController@index');
Route::get('/matpel/{id_matpel}','MatpelController@index');
