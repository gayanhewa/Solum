<?php

Route::get('/', 'Controllers\Admin\DashboardController@index');
Route::resource('users', 'Controllers\Admin\UsersController');
Route::get('login','Controllers\Admin\SessionsController@create');
Route::post('login','Controllers\Admin\SessionsController@store');
Route::get('logout','Controllers\Admin\SessionsController@destroy');