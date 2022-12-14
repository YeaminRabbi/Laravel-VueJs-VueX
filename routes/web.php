<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/example', function () {
    return view('example');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/delete-student/{id}', [StudentController::class, 'delete'])->name('delete-students');
Route::get('/edit-student/{id}/edit', [StudentController::class, 'edit'])->name('edit-students');
Route::put('/update-student/{id}', [StudentController::class, 'update'])->name('updateStudent');

Route::post('/get-studentsdata', [StudentController::class, 'fetchstudentData'])->name('fetchStudentData');
Route::get('/add-student', [App\Http\Controllers\StudentController::class, 'create'])->name('add-student');
Route::post('/save-student', [App\Http\Controllers\StudentController::class, 'store'])->name('store-student');
Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/fetch-student-showbyid/{id}', [StudentController::class, 'editData']);