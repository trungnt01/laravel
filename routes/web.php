<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('Home');
});

Route::get('/users', function () {
    return view('users/Users');
});

//Route::get('/users/{id}', function ($id) {
//    return view('users/UserDetail');
//})->where('id', '[0-9]+');

Route::get('/users/{name?}', function ($name = 'Josh') {
    return $name;
});

