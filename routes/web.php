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
//     $books = [
//         'Harry potter',
//         'Laravel'
//     ];
//     return view('welcome', ['books' => $books]);
// });

Route::get('/', 'HomeController@index');

Route::get('/hello', 'HomeController@hello');

Route::get('/contact', 'HomeController@contact');
