<?php



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/QuienesSomos', function(){
	return view('quienessomos');
})->name('conocemas');

Route::get('/Registro', function(){
	return view('auth/register');
})->name('registro');

Route::get('/IniciarSesion', function(){
	return view('auth/login');
})->name('login');

