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

Route::get('/','HomeController@index');
Route::get('/skelbimai','HomeController@ShowSkelbimai');
Route::get('/apie','HomeController@ShowApie');
Route::get('/kontaktai','HomeController@ShowKontaktai');
Route::get('/prisijungti','HomeController@ShowPrisijungti');
Route::get('/registruotis','HomeController@ShowRegistruotis');
Route::get('/prideti','HomeController@ShowPrideti');