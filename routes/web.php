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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', array('as' => 'index', 'uses' => 'PostController@getIndex'));
Route::get('/admin', array('as' => 'admin_area', 'uses' => 'PostController@getAdmin'));
Route::post('/add', array('as' => 'add_new_post', 'uses' => 'PostController@postAdd'));
Route::post('/login', array('as' => 'login', 'uses' => 'UserController@postLogin'));
Route::get('/logout', array('as' => 'logout', 'uses' => 'UserController@getLogout'));
