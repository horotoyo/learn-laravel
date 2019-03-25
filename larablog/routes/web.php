<?php

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', 'BlogController@index');

// Route::get('/home', function() {
// 	$data['nama']		= 'Suryo';
// 	$data['alamat'] 	= 'Ngemplak';
// 	$data['jk'] 		= 0;
// 	return view('home.index', $data);
// });

Route::get('/home', function() {
	return view('home.index');
});