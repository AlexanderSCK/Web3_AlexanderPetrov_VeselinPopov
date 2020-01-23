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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resources(['projects'=> 'ProjectController',
                 'profile' => 'ProfileController',
                 'projectTask' => 'ProjectTasksController'
            ]);  
Route::get('/showdata', 'CsvController@showdata');     
Route::get('/export', 'CsvController@export'); 
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');