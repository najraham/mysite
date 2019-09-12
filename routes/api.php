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

Route::get('/messageStatus/{id}' , 'DashboardController@changeMessageStatus');

Route::post('/editedAbout' , 'DashboardController@editAbout');

Route::post('/editedIndex' , 'DashboardController@editIndex');

Route::post('/editedProject' , 'DashboardController@editProject');

Route::post('/editedSkill' , 'DashboardController@editSkill');

Route::post('/editedBlog' , 'DashboardController@editBlog');