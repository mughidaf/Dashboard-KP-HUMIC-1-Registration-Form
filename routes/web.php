<?php

use App\Http\Controllers\FormController;
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

Route::get('/formMaker', function () {
    return view('FormMaker');
});

Route::post('/storeForm', [FormController::class,'store']);

Route::get('/ResponsePage', function () {
    return view('ResponsePage');
});

Route::get('/MoreOption', function () {
    return view('MoreOption');
});