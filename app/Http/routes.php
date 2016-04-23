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

Route::get('/', 'LatestArticleController@getLatestArticles');

Route::get('/index', 'LatestArticleController@getLatestArticles');

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/list', 'ArticleController@getArticles');


Route::get('/about', function () {
    return view('about');
});


Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('blade', function () {
    return view('child');
});

Route::post("/update_email","AdminTasksController@updateEmail");

Route::post("/update_password","AdminTasksController@updatePassword");

Route::post("/create_article","AdminTasksController@createArticle");

Route::post("/create_publication","AdminTasksController@createPublication");