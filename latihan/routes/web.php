<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kamar/{nama}', 'KamarController@index');

Route::get('/result', function(){
	return view('kamar.result');
});

Route::post('/proses', 'KamarController@proses');