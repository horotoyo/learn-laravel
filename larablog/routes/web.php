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

Route::prefix('admin')->group(function () {
    Route::get('santri', 'Admin\SantriController@index');
    Route::get('santri/create', 'Admin\SantriController@create');
    Route::post('santri', 'Admin\SantriController@store');
});