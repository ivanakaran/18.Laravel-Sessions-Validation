<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'UsersController@index')->name('home');
Route::get('/login', 'UsersController@create');
Route::post('/login', 'UsersController@login')->name('login');
Route::get('/logout', 'UsersController@logout')->name('logout');
Route::post('/infoPage', 'UsersController@info')->name('infoPage');