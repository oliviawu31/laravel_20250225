<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('student.index');
// });




Route::get('/students_excel', [StudentController::class, 'excel']);
Route::resource('students', StudentController::class);