<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'PostController@index')->name('posts.index');
Route::get('post', 'PostController@create')->name('post.create');
Route::post('post', 'PostController@store')->name('post.store');
Route::get('/post-show/{id}', 'PostController@show')->name('post.show');
Route::post('/comment/store', 'CommentController@store')->name('comments.store');
