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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/absen',[App\Http\Controllers\AbsenController::class, 'index'])->middleware('auth');

Route::get('/employee',[App\Http\Controllers\EmployeeController::class, 'index'])->middleware('auth');
Route::get('/employee/create',[App\Http\Controllers\EmployeeController::class, 'create']);
Route::get('/employee/detail',[App\Http\Controllers\EmployeeController::class, 'detail']);
Route::get('/employee/edit/{id}',[App\Http\Controllers\EmployeeController::class, 'edit']);
Route::post('employee/store', [App\Http\Controllers\EmployeeController::class, 'store']);
Route::get('employee/delete/{id}',[App\Http\Controllers\EmployeeController::class, 'delete']);

Route::get('/sk',[App\Http\Controllers\SkController::class, 'index'])->middleware('auth');
