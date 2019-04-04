<?php

Route::get('/', function () {
    return view('welcome');
});

//Route for home page
Route::get('/home', function() {
	return view('admin.home.index');
});

//Route for category
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