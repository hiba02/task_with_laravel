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

Route::get('/', function () {
    $books = [
        'Harry potter',
        'Laravel',
        'PHP',
    ];
    return view('welcome')->with(['books'=>$books]);
}); //why do 'books' assign as a key, not $books?
// it should be match 'books' with '$books'

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/contact', function() {
    return view('contact');
});
