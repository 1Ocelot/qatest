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

//Questions routes
Route::get('/questions', 'QuestionController@index');
Route::get('/questions/create', 'QuestionController@create');
Route::get('/questions/{question}', 'QuestionController@show');
Route::post('/questions', 'QuestionController@store');
Route::get('/questions/{question}/edit', 'QuestionController@edit');
Route::patch('/questions/{question}', 'QuestionController@update');
Route::delete('/questions/{question}', 'QuestionController@destroy');

//Users routes
Route::get('/users', 'UserController@index');

//Answers routes
Route::get('/answers/{question}/create', 'AnswerController@create');
Route::post('/answers/store', 'AnswerController@store');
