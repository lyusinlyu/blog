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
    //Creating Categories with insert()

    // $ids = [];

    // foreach($category_inputs as $category_input)
    // {
    //     $ids[] = DB::table('categories')->insertGetId($category_input);
    // }
    // $cat1_id = $ids[0];
    // $cat2_id = $ids[1];
    // $cat3_id = $ids[2];  
   

    //Creating Categories with create()
    $u1_cat1 = Category::create($category_inputs[1]);
    $cat1_id = $u1_cat1 -> id;    

    $u1_cat2 = Category::create($category_inputs[2]);
    $cat2_id = $u1_cat2 -> id;    

    $u1_cat3 = Category::create($category_inputs[3]);
    $cat3_id = $u1_cat3 -> id;
    
    //Creating Posts
    //Category_1 Posts
    $post_inputs = [
        1 => ['user_id' => $user1_id, 'category_id' => $cat1_id, 'title' => 'Post_1 Title', 'content' => 'Post_1 Content'],
        2 => ['user_id' => $user1_id, 'category_id' => $cat1_id, 'title' => 'Post_2 Title', 'content' => 'Post_2 Content'],
        3 => ['user_id' => $user1_id, 'category_id' => $cat2_id, 'title' => 'Post_1 Title', 'content' => 'Post_1 Content'],
        4 => ['user_id' => $user1_id, 'category_id' => $cat2_id, 'title' => 'Post_2 Title', 'content' => 'Post_2 Content'],
        5 => ['user_id' => $user1_id, 'category_id' => $cat3_id, 'title' => 'Post_1 Title', 'content' => 'Post_1 Content'],
        6 => ['user_id' => $user1_id, 'category_id' => $cat3_id, 'title' => 'Post_2 Title', 'content' => 'Post_2 Content']

    ];
    $cat1_post1 = Post::create($post_inputs[1]);
    $cat1_post1_id = $cat1_post1->id;

    $cat1_post2 = Post::create($post_inputs[2]);
    $cat1_post2_id = $cat1_post2->id;

    //Category_2 Posts
    $cat2_post1 = Post::create($post_inputs[3]);
    $cat2_post1_id = $cat2_post1->id;

    $cat2_post2 = Post::create($post_inputs[4]);
    $cat2_post2_id = $cat2_post2->id;
    
    //Category_3 Posts
    $cat3_post1 = Post::create($post_inputs[5]);
    $cat3_post1_id = $cat3_post1->id;

    $cat3_post2 = Post::create($post_inputs[6]);
    $cat3_post2_id = $cat3_post2->id;


    //Creating User_2
    $user2 = User::create($user_inputs['user_2']);
    $user2_id = $user2->id;

    //Likes
    $likes = [
        ['user_id' => $user2_id, 'post_id' => $cat1_post1_id],
        ['user_id' => $user2_id, 'post_id' => $cat1_post2_id],
        ['user_id' => $user2_id, 'post_id' => $cat2_post1_id],
        ['user_id' => $user2_id, 'post_id' => $cat2_post2_id],
        ['user_id' => $user2_id, 'post_id' => $cat3_post1_id],
        ['user_id' => $user2_id, 'post_id' => $cat3_post2_id]
    ];
   
    DB::table('likes')->insert($likes);
    

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
