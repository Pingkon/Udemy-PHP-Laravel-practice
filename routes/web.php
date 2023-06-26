<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

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
Application Routes
--------------------------------------------------------------------
*/

Route::get('/insert', function(){

    DB::insert('insert into posts (title, content) value(?, ?)',['PHP with Laravel','Laravel is the best thing that has happened to PHP']);
});