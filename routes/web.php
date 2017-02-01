<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::resource('posts', 'PostsController');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', 'WelcomeController@index'); 
Route::get('/', 'ArticlesController@index');

// -> contact
Route::get('contact', 'WelcomeController@contact');  

// -> about
Route::get('about', 'PagesController@about');

// Route::group(['middleware' => ['web']], function () {
//     Route::get('articles', 'ArticlesController@index');
//     Route::get('articles/create', 'ArticlesController@create');
//     Route::get('articles/{id}', 'ArticlesController@show');
//     Route::delete('articles/{id}', 'ArticlesController@destroy');  // 消去
//     Route::post('articles', 'ArticlesController@store');
//     Route::get('prime/{num}', 'MathController@show');
// // });

// Route::get('articles/{id}/edit', 'ArticlesController@edit');  // 追加
// Route::patch('articles/{id}', 'ArticlesController@update');  // 追加

// Route::get('articles', ['as' => 'articles.index', 'uses' => 'ArticlesController@index']);
// Route::get('articles/create', ['as' => 'articles.create', 'uses' => 'ArticlesController@create']);
// Route::get('articles/{id}', ['as' => 'articles.show', 'uses' => 'ArticlesController@show']);
// Route::post('articles', ['as' => 'articles.store', 'uses' => 'ArticlesController@store']);
// Route::get('articles/{id}/edit', ['as' => 'articles.edit', 'uses' => 'ArticlesController@edit']);
// Route::patch('articles/{id}', ['as' => 'articles.update', 'uses' => 'ArticlesController@update']);
// Route::delete('articles/{id}', ['as' => 'articles.destroy', 'uses' => 'ArticlesController@destroy']);
Route::resource('articles', 'ArticlesController');
