<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
	return view('home.index');
});

Route::get('/layout', function() {
	return view('layouts.app');
});

Route::get('/umur', [
	'middleware' => 'umur:12',
	'uses' => 'FormController@cek',
]);