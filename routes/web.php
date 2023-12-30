<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\SubjectController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/subjectpage', function () {
//     return view('subjectpage');
// });

// Route::get('/studentpage', function () {
//     return view('studentpage');
// });

// Route::get('mainpage', function () {
//     return view('mainpage');
// });

// Route::get('loginpage', function () {
//     return view('loginpage');
// });

// Route::get('lecturerpage', function () {
//     return view('lecturerpage');
// });

// Auth::routes(); //login,register, reset password

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/aboutpage', [App\Http\Controllers\HomeController::class,'aboutpage'])->name('about');

// Route::get('/homepage', [App\Http\Controllers\HomeController::class,'homepage'])->name('homepage');

// Route::get('/lecturerpage', [App\Http\Controllers\HomeController::class,'lecturerpage'])->name('lecturerpage');

// Route::get('/studentpage', [App\Http\Controllers\HomeController::class,'studentpage'])->name('studentpage');



// Route::resource('/student', App\Http\Controllers\StudentController::class);

// Route::resource('/subject', App\Http\Controllers\SubjectController::class);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'auth'], function () {

Route::resource('student', StudentController::class);
    
Route::resource('lecturer', LecturerController::class);

// only userLevel ==0 can access this route

Route::resource('subject', SubjectController::class)->middleware('can:isAdmin');


});