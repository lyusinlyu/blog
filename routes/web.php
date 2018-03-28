<?php
use Illuminate\Http\Request;
use App\Models\{
    User
};

Route::group(['prefix' => 'users'], function(){
    Route::get('/', 'UsersController@showUsers');
    Route::get('{user_id}', 'UsersController@showUser');
    Route::get('{user_id}/posts', 'PostsController@showPosts');
    Route::get('{user_id}/posts/{post_id}', 'PostsController@showPost');
    Route::get('{user_id}/categories', 'CategoriesController@showCategories');
    Route::get('{user_id}/categories/{category_id}', 'CategoriesController@showCategory');
});



Route::group(['prefix' => 'callback/users'], function(){
    Route::get('/', function() {
        $users = User::all();
        if($users) {
            dd($users);
        }
    });
    Route::get('{user_id}', function($id) {
        $user = User::where('id', '=', $id)->first();
        if($user) {
            dd($user);
        }
    });
    Route::get('{user_id}/posts', function($user_id) {
        $user = User::where('id', $user_id)->first();
        if($user) {
            $posts = $user->posts;
            dd($posts);
        }
    });
    Route::get('{user_id}/posts/{post_id}', function($user_id, $post_id) {
        $user = User::where('id', $user_id)->first();
        if($user) {
            $post = $user->posts()->where('id', $post_id)->first();
            dd($post);
        }
    });
    Route::get('{user_id}/categories', function($user_id) {
        $user = User::where('id', $user_id)->first();
        if($user) {
            $categories = $user->categories;
            dd($categories);
        }
    });
    Route::get('{user_id}/categories/{category_id}', function($user_id, $category_id) {
        $user = User::where('id', $user_id)->first();
        if($user) {
            $category = $user->categories()->where('id', $category_id)->first();
            dd($category);
        }
    });
});






