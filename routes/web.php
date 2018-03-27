<?php
use Illuminate\Http\Request;
use App\Models\{
    User
};

Route::get('/users', 'UsersController@showUsers');
Route::get('/users/{user_id}', 'UsersController@showUser');
Route::get('/users/{user_id}/posts', 'PostsController@showPosts');
Route::get('/users/{user_id}/posts/{post_id}', 'PostsController@showPost');
Route::get('users/{user_id}/categories', 'CategoriesController@showCategories');
Route::get('users/{user_id}/categories/{category_id}', 'CategoriesController@showCategory');

Route::get('callback/users', function() {
    $users = User::all();
        if($users) {
            dd($users);
        }
});
Route::get('callback/users/{user_id}', function($id) {
    $user = User::where('id', '=', $id)->first();
        if($user) {
            dd($user);
        }
});
Route::get('callback/users/{user_id}/posts', function($user_id) {
    $user = User::where('id', $user_id)->first();
        if($user) {
            $posts = $user->posts;
            dd($posts);
        }
});
Route::get('callback/users/{user_id}/posts/{post_id}', function($user_id, $post_id) {
    $user = User::where('id', $user_id)->first();
        if($user) {
            $post = $user->posts()->where('id', $post_id)->first();
            dd($post);
        }
});
Route::get('callback/users/{user_id}/categories', function($user_id) {
    $user = User::where('id', $user_id)->first();
        if($user) {
            $categories = $user->categories;
            dd($categories);
        }
});
Route::get('callback/users/{user_id}/categories/{category_id}', function($user_id, $category_id) {
    $user = User::where('id', $user_id)->first();
        if($user) {
            $category = $user->categories()->where('id', $category_id)->first();
            dd($category);
        }
});
