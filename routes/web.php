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

use Illuminate\Support\Facades\Route;

Route::get('/', 'UserController@index');
Route::post('/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');

Route::get('/advertisements', 'AdvertisementsController@index');
Route::get('/advertisements/create', 'AdvertisementsController@create');
Route::post('/advertisements', 'AdvertisementsController@store');
Route::get('/advertisements/{id}', 'AdvertisementsController@show');
Route::get('/advertisements/{id}/edit', 'AdvertisementsController@edit');
Route::patch('/advertisements/{id}', 'AdvertisementsController@update');
Route::delete('/advertisements/{id}', 'AdvertisementsController@destroy');
Route::get('/advertisements/{id}/delete', 'AdvertisementsController@destroy');