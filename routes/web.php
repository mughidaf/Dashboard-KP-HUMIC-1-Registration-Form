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
    return view('ResponsePage');
});

Route::get('/AdminAddForm', function () {
    return view('AdminAddForm');
});

Route::get('/Homepage', function () {
    return view('Homepage');
});

Route::get('/ResponsePage', function () {
    return view('ResponsePage');
});

Route::get('/MoreOption', function () {
    return view('MoreOption');
});