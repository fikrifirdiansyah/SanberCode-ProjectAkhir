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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('admin/admin');
});

Route::get('/profil','ProfilController@index'); 
Route::get('/pertanyaan','PertanyaanController@pertanyaan'); 
Route::get('/buat_pertanyaan','PertanyaanController@buat');
Route::post('/buat_pertanyaan/buat','PertanyaanController@buat_selesai');  
Route::get('/pertanyaan/edit/{id}','PertanyaanController@edit');
Route::put('/pertanyaan/update/{id}','PertanyaanController@update');
Route::get('/pertanyaan/hapus/{id}','PertanyaanController@hapus');
Route::get('/komentar','KomentarController@index');

Route::get('/buat_komentar','KomentarController@buat');
Route::post('/buat_komentar/buat','KomentarController@buat_selesai');