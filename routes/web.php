<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupervisionController;

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

Route::get('index', [SupervisionController::class, 'index']);

Route::get('registration', [SupervisionController::class, 'reg']);

Route::post('student/store', [SupervisionController::class, 'studentStore'])->name('student.store');
Route::post('teacher/store', [SupervisionController::class, 'teacherStore'])->name('teacher.store');

Route::get('login', [SupervisionController::class, 'login']);
Route::post('login-store', [SupervisionController::class , 'loginstore']);

Route::get('logout', [SupervisionController::class, 'logout']);

Route::get('dash', [SupervisionController::class, 'dash']);

Route::get('studentlist', [SupervisionController::class, 'studentlist']);
Route::get('teacherlist', [SupervisionController::class, 'teacherlist']);

Route::get('delete-user/{id}', [SupervisionController::class, 'delete']);

// for user
Route::get('studentdash', [SupervisionController::class, 'studentdash']);
Route::get('createproject', [SupervisionController::class, 'createproject']);
Route::post('storeproject', [SupervisionController::class, 'storeproject']);

Route::get('projectlist', [SupervisionController::class, 'projectlist']);




