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

Route::get('/home',[
	'as' => 'home',
	'uses' => 'HomeController@index'
]);

Route::get('/tutorial',[
	'as' => 'tutorial',
	'uses' => 'TutorialController@index'
]);

Route::post('/tutorial/result',[
	'as' => 'tutorial.result',
	'uses' => 'TutorialController@create'
]);

Route::get('/programs',[
	'as' => 'programs',
	'uses' => 'ProgramController@index'
]);