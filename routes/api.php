<?php

use App\Http\Controllers\BenefitController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmploymentStatusController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProductivityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::resource('/position', PositionController::class);
Route::resource('/employee', EmployeeController::class);
Route::resource('/benefit', BenefitController::class);
Route::resource('/productivity', ProductivityController::class);
Route::resource('/employment_status', EmploymentStatusController::class);
Route::resource('/payroll', PayrollController::class);
Route::resource('/position', PositionController::class);
