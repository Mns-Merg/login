<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    
    return view('admin');
})->middleware('role:1');

Route::get('/create_quiz', function () {
    
    return view('create_quiz')->middleware('role:1');
});



Route::resource('quizs', 'QuizController')->middleware('role:1');

Route::get('/class', function () {
    return view('class');
});

Route::get('/results', function () {
    return view('results');
})->middleware('role:1');

Route::get('/class_join', function(){
    return view('class_join');
});

Route::get('/vote', 'VoteController@vote');

Route::get('/vote_send', 'VoteController@vote_send');


Route::get('rt_quiz/{id}','QuizController@rt_quiz')->middleware('role:1');

Route::get('rt_quiz_destroy', 'QuizController@rt_quiz_destroy')->middleware('role:1');

Route::get('session/get','SessionController@accessSessionData');

Route::get('session/set','SessionController@storeSessionData');

Route::get('session/set2','SessionController@storeSessionData2');

Route::get('session/remove','SessionController@deleteSessionData');