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

Route::get('/',['/'=>'chk', 'uses' => 'PersonController@index']);
Route::post('/',['/'=>'chk', 'uses' => 'PersonController@update']);

Route::get('chk',['as'=>'chk', 'uses' => 'PersonController@chk']);
Route::post('chk',['as'=>'chk', 'uses' => 'PersonController@chk']);

Route::get('sample', function () {
    return view('sample');
});

