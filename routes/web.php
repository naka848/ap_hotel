<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user','UserController@index');
Route::get('/user/add','UserController@add');
Route::post('/user/add','UserController@create');

Route::get('/reservation','ReservationController@index');
// Route::get('/reservation/find','ReservationController@find');
// Route::post('/reservation/find','ReservationController@search');
