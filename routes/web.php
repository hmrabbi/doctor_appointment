<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;


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

Route::get('/department_view',[DepartmentController::class,'department_view']);
Route::post('/department_add',[DepartmentController::class,'department_add']);
Route::get('/department_delete/{id}',[DepartmentController::class,'department_delete']);
Route::get('/department_update/{id}',[DepartmentController::class,'department_update']);
Route::post('/department_update_post/{id}',[DepartmentController::class,'department_update_post']);

Route::get('/doctor_view',[DoctorController::class,'doctor_view']);
Route::post('/doctor_create',[DoctorController::class,'doctor_create']);
//Route::get('/doctor_get',[DoctorController::class,'doctor_get']);
Route::get('/doctor_list',[DoctorController::class,'doctor_list']);
Route::get('/doctor_delete/{id}',[DoctorController::class,'doctor_delete']);
Route::get('/doctor_update/{id}',[DoctorController::class,'doctor_update']);
Route::post('/doctor_update_post/{id}',[DoctorController::class,'doctor_update_post']);

Route::get('/appointment_create',[AppointmentController::class,'appointment_create']);
Route::post('/appointment_add',[AppointmentController::class,'appointment_add']);
Route::get('/appointment_delete/{id}',[AppointmentController::class,'appointment_delete']);
Route::get('/appointment_update/{id}',[AppointmentController::class,'appointment_update']);
Route::post('/appointment_update_post/{id}',[AppointmentController::class,'appointment_update_post']);




