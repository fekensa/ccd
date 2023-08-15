<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//php artisan migrate:refresh --seed

Route::get('/', function () {
    return view('home');
});

Route::controllers([
	'password' => 'Auth\PasswordController',
]);

Route::get('/login', array('uses' => 'UserController@open_login'));

Route::get('/logout', array('uses' => 'UserController@logout'));

Route::get('/admin', array('uses' => 'UserController@admin'));

Route::get('/cust', array('uses' => 'UserController@customer'));

Route::post('/authenticate', array('uses' => 'UserController@login'));

Route::post('/add_user', array('uses' => 'UserController@new_user'));

Route::get('/cust_message', array('uses' => 'MessageController@customer_message'));

Route::get('/admin_message', array('uses' => 'MessageController@admin_message'));

Route::post('/cust_send', array('uses' => 'MessageController@customer_send'));

Route::post('/admin_send', array('uses' => 'MessageController@admin_send'));

Route::post('/feedback', array('uses' => 'MessageController@send_feedback'));

Route::get('/feedback', array('uses' => 'MessageController@show_feedback'));

Route::get('/a_open_message', array('uses' => 'MessageController@a_show_message'));

Route::get('/c_open_message', array('uses' => 'MessageController@c_show_message'));

// display single message
Route::get('/{id}',['as' => 'message', 'uses' => 'MessageController@show_ind_mess'])->where('id', '[0-9]+');

// add reply
Route::post('mess_reply', array('uses' => 'MessageController@add_reply'));

Route::get('/post', array('uses' => 'PostController@create_post'));

Route::get('/all_posts', array('uses' => 'PostController@list_post'));

Route::post('/save_post', array('uses' => 'PostController@post'));

// display single post
Route::get('/one_post/{id}',['as' => 'post', 'uses' => 'PostController@show_post'])->where('id', '[0-9]+');

// display single news
Route::get('/news/{id}',['as' => 'news', 'uses' => 'NewsController@show_news'])->where('id', '[0-9]+');

Route::get('/edit_post/{id}',['as' => 'post', 'uses' => 'PostController@edit_post'])->where('id', '[0-9]+');

Route::get('/edit_news/{id}',['as' => 'news', 'uses' => 'NewsController@edit_news'])->where('id', '[0-9]+');

// add comment
Route::post('/comment/add', array('uses' => 'PostController@add_comment'));

//edit post
Route::post('/update_post', array('uses' => 'PostController@update_post'));

//edit news
Route::post('/update_news', array('uses' => 'NewsController@update_news'));

//users profile
Route::get('/user/{id}', array('uses' => 'UserController@profile'))->where('id', '[0-9]+');

Route::get('/edit_user/{id}',['as' => 'user','uses' => 'UserController@edit_profile'])->where('id', '[0-9]+');

Route::post('/update_user', array('uses' => 'UserController@update_user'));

Route::get('/open_cust', array('uses' => 'UserController@open_customer'));

Route::get('/open_cust_upload', array('uses' => 'UserController@open_customer_upload'));

Route::post('/to_cust_profile', array('uses' => 'UserController@open_customer_profile'));

Route::post('/to_cust_upload', array('uses' => 'UserController@open_upload_page'));

Route::get('/cust_upload/{id}', array('uses' => 'UserController@upload_page'));

Route::post('/images.store', array('uses' => 'ImageController@store'));

Route::get('/add_news', array('uses' => 'NewsController@create'));

Route::get('/new/{type}', array('uses' => 'NewsController@list_news'));

Route::post('/save_news', array('uses' => 'NewsController@store'));

// add comment
Route::post('/news_comment', array('uses' => 'NewsController@news_comment'));

Route::group(['middleware' => ['auth']], function()
{

});