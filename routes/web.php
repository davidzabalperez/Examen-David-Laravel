<?php

Route::view('/', "enunciado");
Route::get('/cliente',['as'=>'cliente.index',
	'uses'=>'ClienteController@show']);
Route::get('/hotel',['as'=>'hotel.index',
	'uses'=>'HotelController@show']);