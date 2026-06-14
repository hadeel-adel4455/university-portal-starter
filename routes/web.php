
<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login-form');
});

Route::get('/login-form', function () {
    return view('login-form');
});

Route::get('/register-form', function () {
    return view('register');
});

Route::resource('departments', DepartmentController::class)->except('show');
Route::resource('students', StudentController::class)->except('show');
Route::resource('courses', CourseController::class)->except('show');
Route::resource('professors', ProfessorController::class)->except('show');
Route::resource('enrollments', EnrollmentController::class)->except('show');