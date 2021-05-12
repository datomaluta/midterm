<?php

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

Route::get('/', [\App\Http\Controllers\EmployeeController::class, 'home']);

Route::get('/hire/{id}', [\App\Http\Controllers\EmployeeController::class, 'is_hired'])->name('is_hired');

Route::get('/{id}/delete',[\App\Http\Controllers\EmployeeController::class, 'delete'])->name('employee.delete');
