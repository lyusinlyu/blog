<?php

Route::get('/users', 'UsersController@showUsers');
Route::get('/users/{user_id}', 'UsersController@showUser');
Route::get('/users/{user_id}/posts', 'PostsController@showPosts');
Route::get('/users/{user_id}/posts/{post_id}', 'PostsController@showPost');
Route::get('users/{user_id}/categories', 'CategoriesController@showCategories');
Route::get('users/{user_id}/categories/{category_id}', 'CategoriesController@showCategory');
