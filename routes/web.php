<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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
Route::get('student',[StudentController::class,'get_all_student']);

Route::get('edit_student/id={id}', [StudentController::class, 'get_student_by_id']);
Route::put('update-student/id={id}', [StudentController::class, 'edit']);
