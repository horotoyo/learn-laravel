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

Route::get('/profil', 'ProfilController@index')->name('profil.index');
Route::get('/profil/create', 'ProfilController@create')->name('profil.create');
Route::post('/profil', 'ProfilController@store')->name('profil.store');
Route::get('/profil/{profil}/edit', 'ProfilController@edit')->name('profil.edit');
Route::put('/profil/{profil}', 'ProfilController@update')->name('profil.update');
Route::delete('/profil/{profil}', 'ProfilController@destroy')->name('profil.destroy');
