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

Route::get('/dashboard', 'DashboardController@index');

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

Route::get('/tempat/delete/{id}', 'TempatMakanController@destroy')->name('tempat.destroy');

Route::get('/tempat/edit/{id}', 'TempatMakanController@edit')->name('tempat.edit');

Route::get('/tempat/{id}', 'TempatMakanController@update')->name('tempat.update');

// ROUTE LOGIN
Route::get('/login', 'LoginController@index');

Route::post('/login', 'LoginController@authenticate')->name('authenticate');

// ROUTE REGISTER
Route::get('/register', 'RegisterController@index');

Route::post('/register', 'RegisterController@store')->name('register.store');