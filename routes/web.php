<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user','UserController@index');
Route::get('/user/add','UserController@add');
Route::post('/user/add','UserController@create');
Route::get('/user/list','UserController@list');

Route::get('/reservation','ReservationController@index');
Route::get('/reservation/add','ReservationController@add');
Route::post('/reservation/add','ReservationController@create');

Route::get('/room_type','Room_typeController@index');

