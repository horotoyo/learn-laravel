<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog/{nama}', 'BlogController@index');

Route::get('/result', function(){
	return view('kamar.result');
});

Route::post('/proses', 'BlogController@proses');