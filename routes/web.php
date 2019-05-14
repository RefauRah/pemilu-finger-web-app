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
    return view('realcount/base');
});

Route::get('/menu', function () {
    return view('realcount/menu/menu');
});

Route::get('/count', function () {
    return view('realcount/count/count');
});

Route::get('/pemilih', function () {
    return view('realcount/pemilih/pemilih');
});