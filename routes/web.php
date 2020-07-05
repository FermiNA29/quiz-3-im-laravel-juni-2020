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

Route::get('/master', function() {
    return view('layouts.master');
});

Route::get('/', 'ErdController@showimage');
Route::get('/artikel', 'ArticlesController@index');
Route::get('/artikel/create', 'ArticlesController@form');
Route::post('/artikel', 'ArticlesController@save');
Route::get('/artikel/{id}', 'ArticlesController@show');
Route::get('/artikel/{id}/edit', 'ArticlesController@edit');
Route::put('/artikel/{id}', 'ArticlesController@update');
Route::delete('/artikel/{id}', 'ArticlesController@delete');
