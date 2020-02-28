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

Route::get('/pets','PetController@search');
Route::get('/pets/index','PetController@index');
Route::get('/pets/create','PetController@create');
Route::get('/pets/{id}/edit','PetController@edit');
Route::get('/pets/{id}', 'PetController@show');

Route::post('/pets/create', 'PetController@store');
Route::put('/pets/{id}/edit', 'PetController@update');

Route::get('/owners','OwnerController@search');
Route::get('/owners/index','OwnerController@index');
Route::get('/owners/create','OwnerController@create');
Route::get('/owners/{id}/edit','OwnerController@edit');
Route::get('/owners/{id}', 'OwnerController@show');

Route::post('/owners/create', 'OwnerController@store');
Route::put('/owners/{id}/edit', 'OwnerController@update');



