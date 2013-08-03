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


// Test

Route::get('test', 'SkillController@index');




// AdminController

Route::get('admin/dash', 'AdminController@get_dash');
Route::get('admin/dash/news', 'AdminController@get_news');
Route::get('admin/dash/news/add', 'AdminController@create_news');
Route::post('admin/dash/news/add', 'AdminController@post_create_news');
Route::get('admin/dash/news/delete/{id}', 'AdminController@news_delete');

Route::get('admin/dash/players', 'AdminController@admin_players');
Route::get('admin/dash/violations', 'AdminController@violations');
Route::get('admin/dash/violations/ban', 'AdminController@ban_players');
Route::get('admin/dash/violations/namelock', 'AdminController@namelock_players');






