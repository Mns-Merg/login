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