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

Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');

// operations on the project route 


// show all entries
Route::get('/projects','projectsController@index');

// fetch to creat new project 
Route::get('/projects/create','projectsController@create');

// show one entrie 
Route::get('/projects/{project}','projectsController@show');

// creat a new entrie
Route::post('/projects','projectsController@store');

// edit the project 

Route::get('/projects/{project}/edit','projectsController@edit');

// update the specified project 

Route::patch('/projects/{project}','projectsController@update');

//delete the request

Route::delete('/projects/{project}','projectsController@destroy');

