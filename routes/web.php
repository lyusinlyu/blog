<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('posts', 'PostsController@index');
Route::post('posts', 'PostsController@store');
Route::get('posts/{post_id}', 'PostsController@show');
Route::delete('posts/{post_id}', 'PostsController@destroy');
Route::put('posts/{post_id}', 'PostsController@update');

Route::post('posts/{post_id}/comments', 'PostCommentsController@store');
Route::put('posts/{post_id}/comments/{comment_id}', 'PostCommentsController@update');
Route::delete('posts/{post_id}/comments/{comment_id}', 'PostCommentsController@destroy');

Route::post('posts/{post_id}/likes', 'LikesController@like');
Route::delete('posts/{post_id}/likes', 'LikesController@unlike');

Route::group(['prefix' => 'profiles'], function(){
    Route::get('me', 'ProfileController@showAuthUserProfile');
    Route::post('me', 'ProfileController@updateAuthUserProfile');
    Route::get('{id}', 'ProfileController@show');
});

Route::get('/conversations/{id}', 'MessagesController@show');
Route::post('/conversations/{id}', 'MessagesController@store');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');




