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
    return redirect()->route('student');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/students', 'StudentController@index')->name('student');
Route::get('/students/create', 'StudentController@create')->name('student.create');
Route::post('/students/store', 'StudentController@store')->name('student.store');
Route::get('/students/show/{student}', 'StudentController@show')->name('student.show');
Route::get('/students/edit/{student}', 'StudentController@edit')->name('student.edit');
Route::put('/students/update/{student}', 'StudentController@update')->name('student.update');
Route::delete('/students/destroy/{student}', 'StudentController@destroy')->name('student.destroy');