<?php

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function() {
//     return view('welcome');
// });

// Route::get('/', function() {
//     return view('blog.home');
// });

// Route::get('/', 'PostController@publicHomePage');

Route::get('/', 'PostController@publicHomePage');

Auth::routes();

Route::get('profile', 'UserController@profile')->name('profile');

Route::post('profile', 'UserController@update_avatar');

Route::get('/home', 'HomeController@index');

Route::resource('posts', 'PostController');

Route::get('/post/{name}', 'PostController@category')->name('category.show');

Route::get('/post/home', 'PostController@publicHomePage')->name('post.publicHomePage');

// Route::get('/posts/show', 'CommentController@show')->name('posts.show');
// Route::POST('post/signin/{id}','Postcontroller@show')->name('post.view_post');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');

Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');

Route::get('/comment/delete/{id}', 'CommentController@delete')->name('comment.delete');

Route::post('/like', 'PostController@likePost')->name('like');

Route::get('/post/like/{id}', 'LikeController@addlike')->name('like.addlike');
Route::get('/post/unlike/{id}', 'LikeController@unlike')->name('like.unlike');
// Route::get('posts', 'PostController@index');

