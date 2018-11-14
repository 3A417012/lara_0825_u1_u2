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

Route::get('/', function () {
    //return view('welcome');
    //$posts=\App\Post::find(1);
	//dd($posts);
	//\App\Post::destroy(2);
	$allPosts = \App\Post::all();
	dd($allPosts);
	$featuredPosts = \App\Post::where('is_feature',1)->get();
	dd($featuredPosts);
});
/*
\App\Post::create([
	'title' => 'test title',
	'content' => 'test content'
]);
*/

$post = \App\Post::find(1);
$post->title = 'saved title';
$post->content = 'saved content';
$post->save();

