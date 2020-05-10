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
//     return view('home');
// });

// Route::get('/notfound', function () {
//     return view('notfound');
// });

Route::get('/', 'LinkController@home');
Route::get('/notfound', 'LinkController@notFound');

Route::post('/generateLink', 'LinkController@generateLink');
Route::get('/{link_pendek}', 'LinkController@accessLink');