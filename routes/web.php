<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/post/{id}', '\App\Http\Controllers\PostsController@index');


Route::get('/', function () {
    return view('welcome');
});

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