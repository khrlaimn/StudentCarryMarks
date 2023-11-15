<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LecturerController; 

use App\Http\Controllers\HomeController; 

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

Route::get('/subjectpage', function () {
    return view('subjectpage');
});

Route::get('/studentpage', function () {
    return view('studentpage');
});

Route::get('mainpage', function () {
    return view('mainpage');
});

Route::get('loginpage', function () {
    return view('loginpage');
});

Route::get('lecturerpage', function () {
    return view('lecturerpage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/aboutpage', [App\Http\Controllers\HomeController::class,'aboutpage'])->name('about');