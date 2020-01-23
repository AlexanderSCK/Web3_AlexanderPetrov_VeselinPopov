<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Show all projects
Route::middleware('auth:api')->get('projects','ProjectController@apiIndex');
//Show single project
Route::middleware('auth:api')->get('project/{project_id}','ProjectController@apiShow');
//Create project
Route::middleware('auth:api')->post('project','ProjectController@apiStore');
//Update project
Route::middleware('auth:api')->put('project','ProjectController@apiStore');
//Delete project
Route::middleware('auth:api')->delete('project/{project_id}','ProjectController@apiDestroy');



