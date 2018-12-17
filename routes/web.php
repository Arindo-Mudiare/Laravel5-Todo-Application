<?php

/*
|C:\laragon\www\todos>
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', [
    'uses' => 'PagesController@new'
]);
// get all todoams route
Route::get('/todoams', [
    'uses' => 'TodoamsController@index',
    'as' => 'todoams'
]);
// Delete todoam route
Route::get('/todoams/delete/{id}', [
    'uses' => 'TodoamsController@delete',
    'as' => 'todoam.delete'
]);

// Update todoam route
Route::get('/todoams/update/{id}', [
    'uses' => 'TodoamsController@update',
    'as' => 'todoam.update'
]);

// Save Updated todoam route
Route::post('/todoams/save/{id}', [
    'uses' => 'TodoamsController@save',
    'as' => 'todoams.save'
]);

// create todo am route
Route::post('/create/todoam', [
    'uses' => 'TodoamsController@store'
]);
//  define todoams completed route
Route::get('/todoams/completed/{id}', [
    'uses' => 'TodoamsController@completed',
    'as' => 'todoams.completed'
]);