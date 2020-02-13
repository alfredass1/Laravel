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
Route::get('/prideti','AdController@addSkelbimas');
Route::get('/skelbimas/{ad}','HomeController@ShowSkelbimas');
Route::get('/kategorija','CategoryController@AddKategorija');
Route::POST('/store-category','CategoryController@StoreCategory'); //s-c yra uzklausa ne psl
Route::get('/valdyti-kategorija','CategoryController@valdytiKategorija');
Route::get('/trinti-kategorija/{category}','CategoryController@trintiKategorija'); //t-k yra uzklausa ne psl
Route::POST('/store-ad','AdController@storeAd');
Route::get('/valdyti-skelbima','AdController@valdytiSkelbima');
Route::get('/trinti-skelbima/{ad}','AdController@trintiSkelbima'); //t-s yra uzklausa ne psl
Route::get('/redaguotiSkelbima/ad/{ad}', 'AdController@redaguotiSkelbima');
Route::Post('/redaguoti_skelbima/{ad}', 'AdController@redaguoti_skelbima');
Route::get('/search-action', 'AdController@paieska');
Route::get('/logout','HomeController@atsijungti');

Auth::routes();

Route::get('/valdytiSkelbima','HomeController@index')->name('home');

