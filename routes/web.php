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


/*

    GET /projects (index)
    GET /projects/create (create)
    GET /projects/1 (show)
    POST /projects (store)
    GET /projects (edit)
    {PUT, PATCH} => kind of the same but we stick often with PATCH /projects/1 (update)
    DELETE /projects/1 (destroy)


    I can preview all these routes from the terminal by typing : 
    php artisan route:list

*/


// // show all entries
// Route::get('/projects','projectsController@index');

// // fetch to creat new project 
// Route::get('/projects/create','projectsController@create');

// // show one project  
// Route::get('/projects/{project}','projectsController@show');

// // creat a new entrie
// Route::post('/projects','projectsController@store');

// // edit the project 

// Route::get('/projects/{project}/edit','projectsController@edit');

// // update the specified project 

// Route::patch('/projects/{project}','projectsController@update');

// //delete the request

// Route::delete('/projects/{project}','projectsController@destroy');


/*
    the shortcut for the above ☝routes is : 


*/


Route::resource('projects','projectsController');
