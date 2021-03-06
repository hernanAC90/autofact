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
Route::group(['middleware' => ['web']], function() {
    Route::get('/', 'HomeController@home')->name('home');
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

    Route::post('questions', 'QuestionController@store');
});

Auth::routes();

