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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@home')->name('home')->middleware('auth');
Route::get('/admin/artikel', 'ArtikelController@index')->name('artikel')->middleware('auth');
Route::post('/artikels', 'ArtikelController@getArtikel')->name('artikels');
Route::post('/artikel/ajax_list', 'ArtikelController@ajax_list')->name('artikel-ajax-list');
Route::post('/artikel/ajax_create', 'ArtikelController@create')->name('artikel-ajax-create');
Route::post('/artikel/ajax_update', 'ArtikelController@update')->name('artikel-ajax-update');
Route::get('/artikel/ajax_edit/{id}', 'ArtikelController@edit')->name('artikel-ajax-edit');
Route::get('/artikel/ajax_delete/{id}', 'ArtikelController@destroy')->name('artikel-ajax-destroy');
