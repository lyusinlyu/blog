<?php
use DB;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Message;



function dbDataFill() {

/*
1) Create a user 1
2) Create 3 categories that belong to the user 1
3) Create 2 posts for each category (posts also belong to the user 1)
4) Create user 2
5) Set likes on every post from user 2
6) Write a message from user 2 to user 1
*/

    //User input data
    $user_inputs = [
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
    $user1 = User::create($user_inputs['user_1']);
    $user1_id = $user1->id;    

    $category_inputs = [
       1 => ['user_id' => $user1_id, 'title' => 'Category 1'],
       2 => ['user_id' => $user1_id, 'title' => 'Category 2'],
       3 => ['user_id' => $user1_id, 'title' => 'Category 3']
    ];
    //Creating Categories 

    foreach($category_inputs as $category_input) {
        $category = Category::create($category_input);
        $ids[] = $category->id;
    }
   
    //Creating Posts

    $post_inputs = [
        ['user_id' => $user1_id, 'category_id' => $ids[0], 'title' => 'Post_1 Title', 'content' => 'Post_1 Content'],
        ['user_id' => $user1_id, 'category_id' => $ids[0], 'title' => 'Post_2 Title', 'content' => 'Post_2 Content'],
        ['user_id' => $user1_id, 'category_id' => $ids[1], 'title' => 'Post_1 Title', 'content' => 'Post_1 Content'],
        ['user_id' => $user1_id, 'category_id' => $ids[1], 'title' => 'Post_2 Title', 'content' => 'Post_2 Content'],
        ['user_id' => $user1_id, 'category_id' => $ids[2], 'title' => 'Post_1 Title', 'content' => 'Post_1 Content'],
        ['user_id' => $user1_id, 'category_id' => $ids[2], 'title' => 'Post_2 Title', 'content' => 'Post_2 Content']

    ];
    $postIds = [];
    for ($i = 0; $i < count($post_inputs); $i++) {
        $post = Post::create($post_inputs[$i]);
        $postIds[] = $post->id;
    }
    
    //Creating User_2
    $user2 = User::create($user_inputs['user_2']);
    $user2_id = $user2->id;

    //Likes
   
    for ($i = 0; $i < count($postIds); $i++) {
        $likes[] = ['user_id' => $user2_id, 'post_id' => $postIds[$i]];
    }
    Like::insert($likes);

    //Message 
    $msg =  [
        'from_user_id' => $user2_id, 
        'to_user_id' => $user1_id, 
        'content' => 'Lus baylus'
    ];
    Message::create($msg);
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
    dbDataFill();
});
