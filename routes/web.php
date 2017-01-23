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

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['middleware' => ['web']], function () {
    Route::get('articles', 'ArticlesController@index');

    Route::get('articles/create', 'ArticlesController@create');

    Route::get('articles/{id}', 'ArticlesController@show');

    Route::post('articles', 'ArticlesController@store');

    Route::get('prime/{num}', 'MathController@show');
// });

Route::get('articles/{id}/edit', 'ArticlesController@edit');  // 追加
Route::patch('articles/{id}', 'ArticlesController@update');  // 追加
