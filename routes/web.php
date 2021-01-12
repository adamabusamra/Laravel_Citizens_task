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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/', 'HomeController@array');
Route::get('/single_student/{id}', 'studentController@show_student');
Route::get('/projects', 'studentController@show_students');
Route::get('/adam', function () {
    return view('/dashboard/adam');
});
//Citizen

Route::get('citizen/register', 'citizenController@create')->name('citizen.register');
Route::post('citizen/register', 'citizenController@store')->name('citizen.register.submit');
Route::get('citizen/{citizen}/edit', 'citizenController@edit')->name('citizen.edit');
Route::post('citizen/{citizen}/edit', 'citizenController@update')->name('citizen.edit.submit');
Route::get('citizen/{citizen}/delete', 'citizenController@destroy')->name('citizen.delete');
Route::get('citizen', 'citizenController@index')->name('home');


// Route::get('/home', function () {
//     return view('/dashboard/index');
// });
// Route::get('/home', function () {
//     return view('/dashboard/index');
// });
