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
Route::get('/reservation/list','ReservationController@list');
Route::get('/reservation/list2','ReservationController@list2');

Route::get('/reservation_detail','Reservation_detailController@index');

Route::get('/room_type','Room_typeController@index');
Route::get('/room_type/list','Room_typeController@list');

Route::get('/room','RoomController@index');
Route::get('/room/list','RoomController@list');
Route::get('/room/find','RoomController@find');
Route::post('/room/find','RoomController@search');

Route::get('/room/find2','RoomController@find2');
Route::post('/room/find2','RoomController@search2');

