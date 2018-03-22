<?php
use DB;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Message;

/*
1) Create a user 1
2) Create 3 categories that belong to the user 1
3) Create 2 posts for each category (posts also belong to the user 1)
4) Create user 2
5) Set likes on every post from user 2
6) Write a message from user 2 to user 1
 */

function db_fill_by_tyom() {
     //User input data
     $userInputs = [
        'user_1' => [
            'name' => 'lus',
            'surname' => 'Hovhannisian',
            'nickname' => 'LLL',
            'password' => 'cheshireCat',
            'email' => 'lusine@gmail.com',
            'gender' => 'female',
            'date_of_birth' => '1990-12-26 16:05:00'
        ],
        'user_2' => [
            'name' => 'Tyom',
            'surname' => 'Kagramanov',
            'nickname' => 'TTT',
            'password' => 'TLP',
            'email' => 'artyomkagramanov@gmail.com',
            'gender' => 'male',
            'date_of_birth' => '1994-03-15 00:05:00'
        ]
    ];

    //Creating a User
    $user1 = User::create($userInputs['user_1']);
    $user_id = DB::connection()->getPdo()->lastInsertId();


    //Creating Categories
    $user1_category_1 = Category::create(
        ['user_id' => $user_id, 'title' => 'Category 1']
    );
    $category_1_id = DB::connection()->getPdo()->lastInsertId();
    

    $user1_category_2 = Category::create(
        ['user_id' => $user_id, 'title' => 'Category 2']
    );
    $category_2_id = DB::connection()->getPdo()->lastInsertId();
    

    $user1_category_3 = Category::create(
        ['user_id' => $user_id, 'title' => 'Category 3']
    );
    $category_3_id = DB::connection()->getPdo()->lastInsertId();
    
    //Creating Posts
    //Category_1 Posts
    $user_1_category_1_post_1 = Post::create(
        [
            'user_id' => $user_id, 
            'category_id' => $category_1_id, 
            'title' => 'Post_1 Title', 
            'content' => 'Post_1 Content'
        ]
        );
    $user_1_category_1_post_1_id = DB::connection()->getPdo()->lastInsertId();

    $user_1_category_1_post_2 = Post::create(
        [
            'user_id' => $user_id, 
            'category_id' => $category_1_id, 
            'title' => 'Post_2 Title', 
            'content' => 'Post_2 Content'
        ]
        );
    $user_1_category_1_post_2_id = DB::connection()->getPdo()->lastInsertId();
    //Category_2 Posts
    $user_1_category_2_post_1 = Post::create(
        [
            'user_id' => $user_id, 
            'category_id' => $category_2_id, 
            'title' => 'Post_1 Title', 
            'content' => 'Post_1 Content'
        ]
        );
    $user_1_category_2_post_1_id = DB::connection()->getPdo()->lastInsertId();

    $user_1_category_2_post_2 = Post::create(
        [
            'user_id' => $user_id, 
            'category_id' => $category_2_id, 
            'title' => 'Post_2 Title', 
            'content' => 'Post_2 Content'
        ]
        );
    $user_1_category_2_post_2_id = DB::connection()->getPdo()->lastInsertId();
    
    //Category_3 Posts
    $user_1_category_3_post_1 = Post::create(
        [
            'user_id' => $user_id, 
            'category_id' => $category_3_id, 
            'title' => 'Post_1 Title', 
            'content' => 'Post_1 Content'
        ]
        );
    $user_1_category_3_post_1_id = DB::connection()->getPdo()->lastInsertId();

    $user_1_category_3_post_2 = Post::create(
        [
            'user_id' => $user_id, 
            'category_id' => $category_3_id, 
            'title' => 'Post_2 Title', 
            'content' => 'Post_2 Content'
        ]
        );
    $user_1_category_3_post_2_id = DB::connection()->getPdo()->lastInsertId();


    //Creating User_2
    $user2 = User::create($userInputs['user_2']);
    $user_2_id = DB::connection()->getPdo()->lastInsertId();

    //Likes
    $user_2_like_category_1_post_1 = Like::create(['user_id' => $user_id, 'post_id' => $user_1_category_1_post_1_id]);
    $user_2_like_category_1_post_2 = Like::create(['user_id' => $user_id, 'post_id' => $user_1_category_1_post_2_id]);

    $user_2_like_category_2_post_1 = Like::create(['user_id' => $user_id, 'post_id' => $user_1_category_2_post_1_id]);
    $user_2_like_category_2_post_2 = Like::create(['user_id' => $user_id, 'post_id' => $user_1_category_2_post_2_id]);

    $user_2_like_category_3_post_1 = Like::create(['user_id' => $user_id, 'post_id' => $user_1_category_3_post_1_id]);
    $user_2_like_category_3_post_2 = Like::create(['user_id' => $user_id, 'post_id' => $user_1_category_3_post_2_id]);
    

    //Message from user_2 to user_1

    $user_2_msg_to_user_1 = Message::create(
        [
        'from_user_id' => $user_2_id, 
        'to_user_id' => $user_id, 
        'content' => 'Lus baylus'
    ]);
}


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
   db_fill_by_tyom();
});
