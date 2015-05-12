<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['use' => 'LabController@index', 'as' => 'Index']);
Route::get('admin', ['use' => 'LabController@index', 'as' => 'Admin']);
Route::get('lab/{id}', ['use' => 'LabController@show', 'as' => 'Show']);
Route::get('lab/{id}', ['use' => 'LabController@create', 'as' => 'Create']);
Route::post('lab/{id}', ['use' => 'LabController@store']);
Route::get('lab/{id}/edit', ['use' => 'LabController@edit', 'as' => 'Edit']);
Route::post('lab/{id}/edit', ['use' => 'LabController@update']);
Route::post('lab/{id}/delete', ['use' => 'LabController@delete', 'as' => 'Delete']);
