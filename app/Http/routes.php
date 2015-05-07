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

Route::get('/', 'EventsController@index');
Route::get('/group', 'GroupsController@index');
Route::get('/auditory', 'AuditoriesController@index');
Route::get('/teacher', 'TeachersController@index');
Route::get('/subject', 'SubjectsController@index');
