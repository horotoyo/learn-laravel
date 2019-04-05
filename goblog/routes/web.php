<?php

Route::get('/', function () {
    return view('welcome');
});

//for auth
Route::get('/form', 'AuthController@form')->name('auth.form');
Route::post('/login', 'AuthController@login')->name('auth.login');
Route::get('/logout', 'AuthController@logout')->name('auth.logout');
Route::get('/home', function() {
	return view('admin.home.index');
})->name('home');

// Route::get('/cek-status', 'UserController@cek')->name('users.cek');

//for access users
Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::post('/users', 'UserController@store')->name('users.store');
Route::get('/users/{user}/edit}', 'UserController@edit')->name('users.edit');
Route::put('/users/{user}', 'UserController@update')->name('users.update');
Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');
Route::get('/users/{user}', 'UserController@show')->name('users.show');