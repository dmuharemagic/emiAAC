<?php

// MainController

Route::get('/', 'MainController@get_index');
Route::get('index', 'MainController@get_index');

// AuthController

Route::get('register', 'AuthController@get_register');
Route::post('register', 'AuthController@post_register');
Route::get('login', 'AuthController@get_login');
Route::post('login', 'AuthController@post_login');
Route::get('logout', 'AuthController@get_logout');

Route::get('managment', array('before' => 'auth', function()
{
   return View::make('aac.managment');
}));

// AdminController

Route::get('admin/dashboard', 'AdminController@dashboard');

// SubController

Route::get('online', 'SubController@get_online');






