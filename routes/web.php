<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use EloquentORM\User;

Route::get('/create', function () {
    
	$user = User::create([
		'name' =>  'Ana Fernandez',
		'email' => 'ana@gmail.com',
		'password' => bcrypt('123456'),
		'gender' => 'f',
		'biography' => 'Administradora financiera'
	]);

	return 'Usuario Guardado';

});

Route::get('/update', function () {
    
	$user = User::find(1);

	$user->gender = 'm';
	$user->biography = 'Líder tecnológico UTB';
	$user->save();

	return 'Usuario Actualizado';

});
