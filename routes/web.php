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
// Route::get('/reservation/del','ReservationController@delete');
// Route::post('/reservation/del','ReservationController@remove');
Route::get('/reservation/list','ReservationController@list');
Route::get('/reservation/list2','ReservationController@list2');

Route::get('/reservation_detail','Reservation_detailController@index');

Route::get('/room_type','Room_typeController@index');
Route::get('/room_type/list','Room_typeController@list');

Route::get('/room','RoomController@index');

