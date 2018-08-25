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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'],function(){

    Route::get('forum','ForumController@index');
    Route::post('discuss/reply','ForumController@reply')->name('discussion.reply');



    Route::resource('channel','ChannelController');


    Route::get('discuss/view/{id}','DiscussionController@show')->name('discuss.view');
    Route::get('discuss/create','DiscussionController@create')->name('discuss.create');
    Route::post('discuss/create','DiscussionController@store');

});
