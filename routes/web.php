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
    return view('front/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome', function (){
    return view('Welcome');
})->name('welcome');



Route::group(['middleware'=>'admin'],function (){
    Route::get('/admin',function(){return view('admin.index');});
    Route::get('/post/{id}',['as'=>'home.post','uses'=>'AdminPostsController@post']);
    Route::resource('admin/users','AdminUsersController');
    Route::resource('admin/posts','AdminPostsController');
    Route::resource('admin/categories','AdminCategoriesController');
    Route::resource('admin/media','AdminMediaController');
    Route::resource('admin/comments','PostCommentsController');
    Route::resource('admin/comment/replies','CommentRepliesController');
    Route::get('admin/index', 'AdminController@index');
});

Route::group(['middleware'=>'auth'],function (){
    Route::post('comment/reply' , 'CommentRepliesController@createReply');
});