<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/post/{id}', '\App\Http\Controllers\PostsController@index');

// Route::resource('posts', '\App\Http\Controllers\PostsController');

// Route::get('/contact', '\App\Http\Controllers\PostsController@contact');

// Route::get('post/{id}/{name}/{password}', '\App\Http\Controllers\PostsController@showPost');


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return "Hi about page";
// });


// Route::get('/contact', function () {
//     return "Hi I am contact";
// });

// Route::get('/post/{number}/{name}', function ($id,$name) {
//     return "This is post number ".$id." ".$name;
// });

// Route::get('admin/posts/example', array('as'=>'admin.home', function(){
//     $url = route('admin.home');

//     return "This url is ".$url;
// }));


/*
--------------------------------------------------------------------
DATABASE Raw SQL Queries
--------------------------------------------------------------------
*/

// Route::get('/insert', function(){

//     DB::insert('insert into posts (title, content) value(?, ?)',['PHP with Laravel','Laravel is the best thing that has happened to PHP']);
// });

// Route::get('/read',function(){

//     $resulsts=DB::select('select * from posts where id=?',[1]);

//     return var_dump ($resulsts);

// });


// Route::get('/update', function(){

//     $updated= DB::update('update posts set title = "Another Updated Title" where id=?',[2]);

//     return $updated;

// });

// Route::get('/delete', function(){
//     $deleted = DB::delete('delete from posts where id=?', [1]);

//     return $deleted;

// });


/*
--------------------------------------------------------------------
ELOQUENT ORM
--------------------------------------------------------------------
*/


// Route::get('/read', function(){

//     $posts = Post::all();

//     foreach($posts as $post){
//         return $post->title;
//     }

// });


Route::get('/find', function(){

    $posts = Post::find(2);

    return $posts->title;

    // foreach($posts as $post){
    //     return $post->title;
    // }

});