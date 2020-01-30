<?php

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

use App\Post;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuaris', function () {
	$users = App\User::all();


    return view('llista_usuaris',["users"=>$users]);
})->middleware('auth');

Route::get('/randomPost', function () {
	$post = App\Post::find(rand(1,50));


    return view('random_post',["post"=>$post]);
})->middleware('auth');

Route::get('/newPost', function () {
	$post = App\Post::all();


    return view('new_post',["post"=>$post]);
})->middleware('auth');

Route::post('/newPost', function (Request $request) {

	

    $post = new Post();
    $post->text = $request->text;
    $post->imatge = 'gregrege';
	$post->user_id = Auth::user()->id;
    $post->save();

});


Route::get('/posts', function () {
	$posts = App\Post::all()->sortBy("created_at");


    return view('llista_posts',["posts"=>$posts]);
})->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
