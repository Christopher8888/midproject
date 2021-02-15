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

Route::get('/', 'PageController@home');

Route::get('/library','LibraryController@index');

//CRUD 

//create untuk menampilkan
Route::get('/create' , 'LibraryController@create');

//store untuk kirim ke database
Route::post('/library' , 'LibraryController@store');

//edit  untuk menampilkan
Route::get('/edit/{id}', 'LibraryController@edit');

//update 
Route::put('/update/{id}' , 'LibraryController@update');

//delete 
Route::get('/delete/{id}', 'LibraryController@delete');