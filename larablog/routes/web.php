<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
	return view('admin.home.index');
});

Route::get('/layout', function() {
	return view('layouts.app');
});

// Route::get('/umur', [
// 	'middleware' => 'umur:12',
// 	'uses' => 'FormController@cek',
// ]);

Route::post('/coba/{id?}', function($id = null){
	return 'User '.$id;
});

//Route untuk santri
Route::prefix('admin')->group(function () {
    Route::get('santri', 'Admin\SantriController@index');
    Route::get('santri/create', 'Admin\SantriController@create');
    Route::post('santri', 'Admin\SantriController@store');
    Route::get('santri/{id}/edit', 'Admin\SantriController@edit');
    Route::put('santri', 'Admin\SantriController@update');
    Route::delete('santri/{id}/delete', 'Admin\SantriController@delete');
});

Route::prefix('admin')->group(function () {
    Route::get('guru', 'Admin\GuruController@index');
    Route::get('guru/create', 'Admin\GuruController@create');
    Route::post('guru', 'Admin\GuruController@store');
    Route::get('guru/{id}/edit', 'Admin\GuruController@edit');
    Route::put('guru', 'Admin\GuruController@update');
    Route::delete('guru/{id}/delete', 'Admin\GuruController@delete');
});

Route::prefix('admin')->group(function () {
    Route::get('provinsi', 'Admin\ProvinsiController@index');
    Route::get('provinsi/create', 'Admin\ProvinsiController@create');
    Route::post('provinsi', 'Admin\ProvinsiController@store');
    Route::get('provinsi/{id}/edit', 'Admin\ProvinsiController@edit');
    Route::put('provinsi', 'Admin\ProvinsiController@update');
    Route::delete('provinsi/{id}/delete', 'Admin\ProvinsiController@destroy');
});