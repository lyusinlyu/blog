<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/me', 'ProfileController@showAuthUserProfile');
Route::post('/me', 'ProfileController@updateAuthUserProfile');
Route::get('/profiles/{id}', 'ProfileController@showUserProfile');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

