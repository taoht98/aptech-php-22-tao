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
    // return view('welcome');
// });

// Route::get('/', function () {
//     return view('greeting', ['name' => 'James']);
// });

// Route::get('users/{id}', function ($id) {
    // return 'User ' . $id;
// });

// Route::get('/quet-nha', 'Controller@quetNha');

Route::get('/users', 'Controller@layTatCaNguoiDung');
