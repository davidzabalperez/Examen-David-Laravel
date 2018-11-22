<?php

Route::view('/', "enunciado");
Route::get('/cliente',['as'=>'cliente.index',
	'uses'=>'ClienteController@show']);
Route::get('/hotel',['as'=>'hotel.index',
	'uses'=>'HotelController@show']);
Route::view('/nuevocliente', 'cliente.create');
Route::post(('/createcliente'), [
	'as'=>'cliente.create',
	'uses'=>'ClienteController@add'
]);
