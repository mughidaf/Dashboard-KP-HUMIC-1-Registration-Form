<?php

use App\Http\Controllers\FormAnswerController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FormQuestionController;
use App\Http\Controllers\UserController;
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

Route::get('/', [FormController::class,'index'])->name('home');

Route::get('/formMaker', function () {
    return view('FormMaker');
});

Route::post('/storeForm', [FormController::class,'store']);
Route::post('/storeAnswer', [FormAnswerController::class,'store']);
Route::post('/', [UserController::class,'login']);

Route::get('/ResponsePage', function () {
    return view('ResponsePage');
});

Route::get('/MoreOption', function () {
    return view('MoreOption');
});

Route::get('/UserViewForm', function () {
    return view('UserViewForm');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/UserLogin', function () {
    return view('UserLogin');
});

Route::get('/EditPage', function () {
    return view('EditPage');
});

Route::get('/UserLogout',[UserController::class,'logout']);

Route::get('/userForm/{id}',[FormQuestionController::class,'show']);
Route::get('/viewForm/{id}',[FormAnswerController::class,'show']);
Route::get('/deleteForm/{id}',[FormController::class,'destroy']);
Route::get('/editingForm/{id}',[FormController::class,'showEdit']);
Route::get('/Details/{id}',[FormAnswerController::class,'detail']);
Route::get('/AllResult/{id}',[FormAnswerController::class,'allData']);
Route::post('/editForm/{id}',[FormController::class,'edit']);