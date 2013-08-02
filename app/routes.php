<?php

Profiler::disable();

// MainController

Route::get('/', 'MainController@get_index');
Route::get('news/index', 'MainController@get_index');
Route::get('news/archive', 'MainController@archive_index');

// AuthController

Route::get('register', 'AuthController@get_register');
Route::post('register', 'AuthController@post_register');
Route::get('login', 'AuthController@get_login');
Route::post('login', 'AuthController@post_login');
Route::get('account/logout', 'AuthController@get_logout');



Route::group(array('before' => 'auth'), function()
{
   
   Route::get('account/managment/change_credentials', 'AuthController@change_credentials');
   Route::get('account/managment', 'SubController@get_managment');
   Route::get('account/managment/create_character', 'SubController@get_character');
   Route::post('account/managment/create_character', 'AuthController@post_character');
   Route::get('account/managment/delete_character/{id}', 'AuthController@delete_character');

});

// SubController

Route::get('community/online', 'SubController@get_online');
Route::get('community/highscores', 'SubController@highscores');
Route::get('recovery/password', 'SubController@recover_password');

// CharactersController
// in progress









