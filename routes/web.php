<?php



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/QuienesSomos', function(){
	return view('quienessomos');
})->name('conocemas');

Route::get('/Curso', function(){
	return view('curso');
})->name('curso');

Route::get('/Registro', function(){
	return view('auth/register');
})->name('registro');

Route::get('/Examen', function(){
	return view('examen');
})->name('examen');

Route::get('/IniciarSesion', function(){
	return view('auth/login');
})->name('log-in');

Route::get('/logout', function(){
	Auth::logout();
	return view('welcome');
})->name('logout');
