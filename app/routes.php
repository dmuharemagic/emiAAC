<?php

// MainController

Route::get('/', 'MainController@get_index');
Route::get('index', 'MainController@get_index');

// AuthController

Route::get('register', 'AuthController@get_register');
Route::post('register', 'AuthController@post_register');
Route::get('login', 'AuthController@get_login');
Route::post('login', 'AuthController@post_login');
Route::get('account/logout', 'AuthController@get_logout');



Route::group(array('before' => 'auth'), function()
{

   Route::get('account/managment', 'SubController@get_managment');
   Route::get('account/create_character', 'SubController@get_character');
   Route::post('account/create_character', 'AuthController@post_character');

});

// SubController

Route::get('online', 'SubController@get_online');
Route::get('highscores', 'SubController@highscores');






