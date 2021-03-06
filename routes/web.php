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
    return view('layout');
});

Route::get('/login', function () {
    return view('Login.login');
});

Route::get('/registration', function () {
    return view('Login.registration');
});

Route::get('/create-profile', function() {
    return view('Home.standard');
});
