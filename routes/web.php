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

Route::get('/', function () {
    // return view('welcome');

    if(Auth::check()){
        return "the user is logged in";
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    
    return view('admin');
});

Route::get('/create_quiz', function () {
    
    return view('create_quiz');
});

Route::get('/peon', function () {
    return view('peon');
});

Route::resource('quizs', 'QuizController');

Route::get('/class', function () {
    return view('class');
});

Route::get('/class_join', function(){
    return view('class_join');
});

Route::get('/vote', 'VoteController@vote');
Route::get('/vote_send', 'VoteController@vote_send');


Route::get('rt_quiz/{id}','QuizController@rt_quiz');
Route::get('rt_quiz_destroy', 'QuizController@rt_quiz_destroy');

Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/set2','SessionController@storeSessionData2');
Route::get('session/remove','SessionController@deleteSessionData');