<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;

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
Route::get('/', [AttendanceController::class, 'index']);
Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee/payroll', [EmployeeController::class, 'payroll']);
Route::get('/admin',[AdminController::class,'index']);

Route::post('/capture', [AttendanceController::class, 'timeIn'])->name('webcam.capture');
