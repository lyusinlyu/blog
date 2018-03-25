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
       'input_1' => ['user_id' => $user1_id, 'title' => 'Category 1'],
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

function dbDataFill2() {
    /*
    1) You have 3 users
    2) Each of them have a category or categories
    3) each of them have posts on their categories
    4) each of them can comment either his own, or all other posts
    5) each of them can like either his own, or all other posts
    */
    //Users input data
    $userInputs = [
        'user1' => [
            'name' => 'Dean',
            'surname' => 'Winchester',
            'nickname' => 'Dean777',
            'password' => 'bla',
            'email' => 'dwinchester@gmail.com',
            'gender' => 'male',
            'date_of_birth' => '1978-03-03 03:00:00'
        ],
        'user2' => [
            'name' => 'Sam',
            'surname' => 'Winchester',
            'nickname' => 'Sam666',
            'password' => 'bla',
            'email' => 'swinchester@gmail.com',
            'gender' => 'male',
            'date_of_birth' => '1982-07-17 00:03:00'
        ],
        'user3' => [
            'name' => 'Robert',
            'surname' => 'Singer',
            'nickname' => 'Bobby123',
            'password' => 'cheshireCat',
            'email' => 'singer123@gmail.com',
            'gender' => 'male',
            'date_of_birth' => '1960-11-03 06:06:00'
        ]
    ];
    foreach ($userInputs as $userInput) {
        $user = User::create($userInput);
        $usersIds[] = $user->id;
    }
    $categoryInputs = [
       1 => ['user_id' => $usersIds[0], 'title' => 'Werevolves'],
       2 => ['user_id' => $usersIds[0], 'title' => 'Vampires'],
       3 => ['user_id' => $usersIds[1], 'title' => 'Ghosts'],
       4 => ['user_id' => $usersIds[2], 'title' => 'Shifters'],
       5 => ['user_id' => $usersIds[2], 'title' => 'Demons'],
       6 => ['user_id' => $usersIds[2], 'title' => 'Angels']
    ];
    foreach ($categoryInputs as $categoryInput) {
        $category = Category::create($categoryInput);
        $categoryIds[] = $category->id;
    }
    $postsInputs = [
        1 => ['user_id' => $usersIds[0], 'category_id' => $categoryIds[0], 'title' => 'Bloody Mary', 'content' => 'content'],
        2 => ['user_id' => $usersIds[0], 'category_id' => $categoryIds[1], 'title' => 'Asylum', 'content' => 'content'],
        3 => ['user_id' => $usersIds[1], 'category_id' => $categoryIds[2], 'title' => 'Shadow', 'content' => 'content'],
        4 => ['user_id' => $usersIds[2], 'category_id' => $categoryIds[3], 'title' => 'Hell House', 'content' => 'content'],
        5 => ['user_id' => $usersIds[2], 'category_id' => $categoryIds[3], 'title' => 'Dead Man\'s Blood', 'content' => 'content'],
        6 => ['user_id' => $usersIds[0], 'category_id' => $categoryIds[1], 'title' => 'Family Remains', 'content' => 'content'],
    ];
    foreach ($postsInputs as $postInput) {
        $post = Post::create($postInput);
        $postsIds[] = $post->id;
    }
    $commentsInputs = [
        ['user_id' => $usersIds[0], 'post_id' => $postsIds[2], 'content' => 'Great'],
        ['user_id' => $usersIds[1], 'post_id' => $postsIds[2], 'content' => 'Thanks'],
        ['user_id' => $usersIds[1], 'post_id' => $postsIds[3], 'content' => 'Have Seen this lately)'],
        ['user_id' => $usersIds[0], 'post_id' => $postsIds[3], 'content' => 'Yep. Me too'],
        ['user_id' => $usersIds[2], 'post_id' => $postsIds[3], 'content' => 'Thanks for commenting'],
        ['user_id' => $usersIds[2], 'post_id' => $postsIds[4], 'content' => 'new Post is here'],
        ['user_id' => $usersIds[0], 'post_id' => $postsIds[5], 'content' => 'ok'],
    ];
    Comment::insert($commentsInputs);

    $likes = [
        ['user_id' => $usersIds[0], 'post_id' => $postsIds[2]],
        ['user_id' => $usersIds[1], 'post_id' => $postsIds[1]],
        ['user_id' => $usersIds[2], 'post_id' => $postsIds[0]],
        ['user_id' => $usersIds[0], 'post_id' => $postsIds[3]],
        ['user_id' => $usersIds[1], 'post_id' => $postsIds[4]],
        ['user_id' => $usersIds[2], 'post_id' => $postsIds[5]]
    ];

    Like::insert($likes);
    }


    function dbDataFillShow() {
        // $users = User::all()->toArray();
        // dd($users);
        if (!isset($_GET['email1'])) {
            dd('please enter your email');
        }
        if (!isset($_GET['email2'])) {
            dd('please enter your email2');
        }

        if (User::where( 'email', $_GET['email1'])->exists()) {
            dd('please enter another email1 address. The address is already used.');
        }
        if (User::where('email', $_GET['email2'])->exists()) {
            dd('please enter another email2 address. The address is already used.');
        }

        $usersInputs = [
            [
            'name' => 'lus',
            'surname' => 'Hovhannisian',
            'nickname' => 'LLL',
            'password' => 'cheshireCat',
            'email' => $_GET['email1'],
            'gender' => 'female',
            'date_of_birth' => '1990-12-26 16:05:00'
            ],
            [
            'name' => 'lik',
            'surname' => 'Hovhannisian',
            'nickname' => 'LLL',
            'password' => 'likCat',
            'email' => $_GET['email2'],
            'gender' => 'female',
            'date_of_birth' => '1990-12-26 16:05:00'
            ]
        ];
        foreach($usersInputs as $userInput) {
            $user = User::create($userInput);
            $userIds[] = $user->id;
        }

        $categoryInput = [
            'user_id' => $userIds[0], 'title' => 'Category Title'
        ];
        $category = Category :: create($categoryInput);
        $categoryId = $category -> id;
        $postInput = [
            'user_id' => $userIds[0], 'category_id' => $categoryId, 'title' => 'Bloody Mary', 'content' => 'content'
        ];
        $post = Post::create($postInput);
        $postId = $post -> id;
        $commentInput = [
            'user_id' => $userIds[0], 'post_id' => $postId, 'content' => 'Hey'
        ];
        $comment = Comment::create($commentInput);
        $commentId = $comment -> id;
        $like = ['user_id' => $userIds[0], 'post_id' => $postId];
        Like::insert($like);
        $msg =  ['from_user_id' => $userIds[0], 'to_user_id' => $userIds[1], 'content' => 'yaxqqqqq'];
        Message::create($msg);

        $userData = [
            'user' =>  User::where('id', $userIds[0])->first(),
            'categories' => Category::where('user_id', $userIds[0])->get(),
            'posts' => Post::where('user_id', $userIds[0])-> where('category_id', $categoryId)->get(),
            'likes' => Like::where('user_id', $userIds[0])-> where('post_id', $postId)->get(),
            'comments' => Comment::where('user_id', $userIds[0])-> where('post_id', $postId)->get(),
            'messages' => Message::where('from_user_id', $userIds[0])->get()
        ];


        dd($userData);
    }
    function getUserData() {
      if(!isset($_GET['email'])) {
        dd('Insert Email');
      }
      $relations = [
        'categories', 'posts', 'likes', 'comments', 'messages'
      ];
      $user = User::where('email',  $_GET['email'])->with($relations)->first();
      if(!$user) {
        dd('The user doesn\'t exist');
      }
      // $category = $user->categories()->create([
      //   'title' => 'sdkjvnjdsfvkjbd'
      // ]);
      dd($user->categories);
      $userData = [
          'user' => $user,
          'categories' => $user->categories,
          'posts' => $user->posts,
          'likes' => $user->likes,
          'comments' => $user->comments,
          'messages' => $user->messages
      ];
      dd($userData);
    }

    function fillData() {
      $relations = ['categories', 'posts', 'comments', 'likes', 'messages'];
      $users = User::with($relations)->get();
      foreach ($users as $user) {
        $category = $user->categories()->create(
          ['title' => 'Another Category']
        );
        $post = $user->posts()->create(
          ['category_id' => $category->id, 'title' => 'Another post', 'content' => 'some new content']
        );
        $user->comments()->create(
          ['post_id' => $post->id,  'content' => 'some new comment']
        );
        $user->likes()->create(
          ['post_id' => $post->id]
        );
      }

      $users = User::with($relations)->get();
      dd($users);

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
    DB::listen(function ($query) {
        dump($query->sql);
        // $query->bindings
        // $query->time
    });
    // dbDataFill();
    // dbDataFill2();
    // dbDataFillShow();
    // getUserData();
    fillData();

});
