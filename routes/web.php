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

// REST-like routes

Route::get('/', 'UserController@index');
Route::post('/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');

Route::get('/advertisements', 'AdvertisementsController@index');
Route::get('/advertisements/create', 'AdvertisementsController@create');
Route::post('/advertisements', 'AdvertisementsController@store');
Route::get('/advertisements/{advertisement}', 'AdvertisementsController@show');
Route::get('/advertisements/{advertisement}/edit', 'AdvertisementsController@edit');
Route::post('/advertisements/{advertisement}', 'AdvertisementsController@update');
Route::get('/advertisements/{advertisement}/delete', 'AdvertisementsController@destroy');

Route::get('/advertisements/{advertisement}/offer/create', 'OfferController@create');
Route::post('/advertisements/{advertisement}/offer/create', 'OfferController@store');
Route::get('/advertisements/{advertisement}/offer/{offer}/edit', 'OfferController@edit');
Route::post('/advertisements/{advertisement}/offer/{offer}/edit', 'OfferController@update');
Route::get('/advertisements/{advertisement}/offer/{offer}/select', 'OfferController@select');
Route::get('/advertisements/{advertisement}/offer/{offer}/delete', 'OfferController@destroy');