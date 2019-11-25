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



Route::group(['prefix' => 'admin'], function(){
  Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
  Route::get('XXX', 'AAAController@bbb');
  Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
  Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
});


Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
  Route::get('news/create', 'Admin\NewsController@add');
  Route::post('news/create', 'Admin\NewsController@create');
  Route::post('profile/create', 'Admin\ProfileController@create'); //Laravel13-課題3
  Route::post('profile/create', 'Admin\ProfileController@create'); //Laravel13-課題4
  Route::post('profile/edit','Admin\ProfileController@update);　//Laravel13-課題6
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
