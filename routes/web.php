<?php
use DB;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Message;
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
/*Select users*/
Route::get('/select', function () {
   
    $users = DB::select("SELECT * FROM `users`");
    // dump($users);
    $select_by_user_id = DB::select("SELECT * FROM `users` WHERE `id` = ?", [4]);
    // dump($select_by_user_id);

    

    $users = DB::table('users')->get(); //Selects all from this table
    // dump($users);
    $first_user = DB::table('users')->get()->first(); //Selects only first user
    // dump($first_user);
    $first_user_name = DB::table('users')->value('name');//Selects only first user's name
    // dump($first_user_name);
    $users_names = DB::table('users')->pluck('name');//Selects all users' names
    // dump($users_names);
    $users_count = DB::table('users')->count();//Count of records in a table
    // dump($users_count);
    $max_id = DB::table('users')->max('id'); //maximum id value
    // dump($max_id);

    DB::table('users')->orderBy('id')->chunk(2, function ($users) {
        foreach($users as $user) {
            // dump($user);
        }
    });

    $user_info = DB::table('users')->distinct()->select('name', 'surname', 'nickname')->get();
    // dump($user_info);

    $user_info = DB::table('users')->select()
                                   ->where('id', '>', 10)
                                   ->where('name', 'like', 't%', 'or')
                                   ->get();
    // dump($user_info);

    $user_info = DB::table('users')->take(5)->skip(5)->select()->get(); //limit & offset
    // dump($user_info);
});

/*Insert new user*/
Route::get('/insert', function () {
    // $new_user = [
    //     'test',
    //     'test', 
    //     'test', 
    //     'test', 
    //     'test'.mt_rand(1000000, 9999999).'@gmail.com', 
    //     'female', 
    //     '1990-12-26 00:00:00'
    // ];
    // DB::insert("INSERT INTO `users` (`name`, `surname`, `nickname`, `password`, `email`, `gender`, `date_of_birth`) VALUES (?, ?, ?, ?, ?, ?, ?)", $new_user);
    // $last_inserted_user_id = DB::connection()->getPdo()->lastInsertId();
    // dump($last_inserted_user_id);
    // $users = DB::select("SELECT * FROM `users`");
    // dump($users);
    // $new_user = [
    //     ['name'=>'test', 'surname'=>'test', 'nickname'=>'test', 'password'=>'bla', 'email' => 'test'.mt_rand(1000000, 9999999).'@gmail.com', 'gender'=>'male', 'date_of_birth'=> '1900-12-26 01:01:01' ],
    //     ['name'=>'bla', 'surname'=>'bla', 'nickname'=>'nafig', 'password'=>'jopa', 'email' => 'jopa'.mt_rand(1000000, 9999999).'@gmail.com', 'gender'=>'male', 'date_of_birth'=> '1900-12-26 01:01:01' ]
    // ];

    // DB::table('users')->insert($new_user);
    // $result = DB::table('users')->insertGetId(['name'=>'test', 'surname'=>'test', 'nickname'=>'test', 'password'=>'bla', 'email' => 'test'.mt_rand(1000000, 9999999).'@gmail.com', 'gender'=>'male', 'date_of_birth'=> '1900-12-26 01:01:01' ]);
    // dump($result);
    // dump(DB::table('users')->get());
    
});

/*Update a user */

Route::get('/update', function () {
    // $changed_user_id = 15;
    // $result = DB::update("UPDATE `users` SET `name` = ?  WHERE `id` = ?", ["updated_name", $changed_user_id]);
    // $users = DB::select("SELECT * FROM `users` WHERE `id` = ?", [$changed_user_id]);
    // dump($result);
    // dump($users);
   DB::table('users')->where('id', 30)->update(['name'=>'Lusinochka', 'nickname'=>'LLL']);
   dump(DB::table('users')->select()->where('id', '=', '30')->get());
});

/*Delete a user */

Route::get('/delete', function () {
    // $result = DB::delete("DELETE FROM `users` WHERE `id` = 14");
    // dump($result);
    $res = DB::table('users')->where('id', 25)->delete();
    dump($res);
});


Route::get('/test', function () {

    /*Determining If Records Exist */

    // if( DB::table('users')->where('name', 'Vahe')->exists()) {
    //     dd("Exist Vahe");
    // } elseif (DB::table('users')->where('name', 'Vahe')->doesntExist()) {
    //     dd("doesn't exist Vahe");
    // }
        // $users = User::all();
        // dump($users);
        // foreach($users as $user) {
        //     // echo $user->name.'<br>';
        // }
        // $users = User::where('id', '>', 15)->orderBy('name')->get();
        // dump($users);
        // dump(User::find(20));
        // dump(User::findOrFail(20));


        // $user = new User;
        // $user->name = 'Tyom';
        // $user->surname = 'Kagramanov';
        // $user->nickname = 'TTT';
        // $user->password = 'TTT';
        // $user->email = 'TTTT@gmail.com';
        // $user->gender = 'male';
        // $user->date_of_birth = '1994-03-15 00:00:00';
        // $user->save();

        // $update_field = User::find(27);
        // $update_field->name = "changed name";
        // $update_field->save();

        // User::where('name', 'test')->update(['name'=>'updated_name']);

        // User::create(

        //         [
        //             'name'=>'create_method', 
        //             'surname'=>'test', 
        //             'nickname'=>'test', 
        //             'password'=>'bla', 
        //             'email' => 'test'.mt_rand(1000000, 9999999).'@gmail.com', 
        //             'gender'=>'male', 
        //             'date_of_birth'=> '1900-12-26 01:01:01' 
        //         ]
              
        // );//fillable properties in model
        
        // $user = User::find(37);
        // $user->delete();
        

    });


















