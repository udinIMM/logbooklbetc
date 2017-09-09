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

Route::resource('/peserta', 'PesertaController');
Route::resource('/home', 'HomeController');
Route::resource('/log', 'LogController');
Route::resource('/lab', 'LaboratoriumController');

Route::get('/peserta/addcsv', function () {
    return view('peserta.addcsv');
});

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('testing', function () {
    return view('includes.content.home');
});

// Route::get('/kdpm', function () {
//     return view('kdpm');
// });

Route::resource('/peserta', 'PesertaController');
Route::resource('/log', 'LogController');
Route::get('/login', 'AuthController@index');
Route::post('/login', 'AuthController@login');
Route::get('/register', 'AuthController@register');
Route::post('/register', 'AuthController@create');
