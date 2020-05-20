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

Route::get('/api/students', 'ApiController@getAllStudents');
Route::get('/api/students/{id}', 'ApiController@getStudent');
Route::post('/api/students', 'ApiController@createStudent')->name('student.create');
Route::put('/api/students/{id}', 'ApiController@updateStudent');
Route::delete('/api/students/{id}','ApiController@deleteStudent');
