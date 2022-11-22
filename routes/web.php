<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ClassStudentsController;
use App\Http\Controllers\StudentActivityController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

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

// Login route
Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::group(['middleware' => ['auth', 'role:teacher']], function() {
    Route::resource('class', ClassesController::class)->only('index', 'show', 'create', 'store');
    Route::resource('subject', SubjectController::class)->only('index', 'show', 'create', 'store');
    Route::get('/class-students/{class}', [ClassStudentsController::class, 'classStudents'])->name('students');
    Route::resource('class-students', ClassStudentsController::class)->only('index', 'show', 'create', 'store');
    Route::get('/class/create-subject/{class}', [SubjectController::class, 'createSubject'])->name('create.subject');
    Route::resource('activity', ActivityController::class)->only('index', 'show', 'create', 'store');
    Route::get('/class/subject/upload-activity/{subject}', [ActivityController::class, 'uploadActivity'])->name('upload.activity');
    Route::get('/download-teacher/{file}',[ActivityController::class, 'downloadTeacher']);
});

Route::group(['middleware' => ['auth', 'role:user']], function() {
    Route::resource('classes', StudentController::class)->only('index', 'show', 'create', 'store');
    Route::resource('activities', StudentActivityController::class)->only('index', 'show', 'create', 'store');
        Route::get('/download/{file}',[StudentActivityController::class, 'downloadFileStudent']);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
