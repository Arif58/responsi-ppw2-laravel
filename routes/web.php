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

Route::get('/', 'FrontEndController@index');

Route::get('/list_tempat/{nama_kota}', 'FrontEndController@listempat')->name('list.tempat');

Route::get('/detail_tempat/{nama_tempat}', 'FrontEndController@detailtmpt')->name('detail.tempat');

Route::get('/dashboard', 'LokasiController@index');

// ROUTE LOKASI
Route::get('/lokasi', 'LokasiController@index');

Route::get('/lokasi/create', 'LokasiController@create')->name('lokasi.create');

Route::post('/lokasi', 'LokasiController@store')->name('lokasi.store');

Route::post('/lokasi/delete/{id}', 'LokasiController@destroy')->name('lokasi.destroy');

Route::get('/lokasi/edit/{id}', 'LokasiController@edit')->name('lokasi.edit');

Route::post('lokasi/{id}', 'LokasiController@update')->name('lokasi.update');

// ROUTE TEMPAT
Route::get('/tempat', 'TempatMakanController@index');

Route::get('/tempat/create', 'TempatMakanController@create')->name('tempat.create');

Route::post('/tempat', 'TempatMakanController@store')->name('tempat.store');

Route::post('/tempat/delete/{id}', 'TempatMakanController@destroy')->name('tempat.destroy');

Route::get('/tempat/edit/{id}', 'TempatMakanController@edit')->name('tempat.edit');

Route::post('/tempat/{id}', 'TempatMakanController@update')->name('tempat.update');



// ROUTE DETAIL TEMPAT
Route::get('/detail_tempat', 'DetailTempatController@index');

Route::get('/detail_tempat/create', 'DetailTempatController@create')->name('detail.create');

Route::get('/getTempat/{id}', 'DetailTempatController@getTempat');

Route::post('/detail_tempat', 'DetailTempatController@store')->name('detail.store');

Route::get('/detail_tempat/view/{id}', 'DetailTempatController@view')->name('detail.view');

Route::post('/detail_tempat/delete/{id}', 'DetailTempatController@destroy')->name('detail.destroy');

Route::get('/detail_tempat/edit/{id}', 'DetailTempatController@edit')->name('detail.edit');

Route::post('/detail_tempat/{id}', 'DetailTempatController@update')->name('detail.update');

// ROUTE LOGIN
Route::get('/login', 'LoginController@index')->middleware('guest');

Route::post('/login', 'LoginController@authenticate')->name('authenticate');

// ROUTE LOGOUT
Route::post('/logout', 'LoginController@logout');

// ROUTE REGISTER
Route::get('/register', 'RegisterController@index');

Route::post('/register', 'RegisterController@store')->name('register.store');