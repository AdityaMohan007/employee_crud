<?php

use App\Http\Controllers\EmployeeController;
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

// list employees
Route::get('/', [EmployeeController::class, 'list'])->name('list');


// create employee
Route::get('/create', [EmployeeController::class, 'create'])->name('create');
Route::post('/create', [EmployeeController::class, 'create_post'])->name('create_post');

// edit employee
Route::get('/update/{id}', [EmployeeController::class, 'update'])->name('update');
Route::post('/update/{id}', [EmployeeController::class, 'update_post'])->name('update_post');

// view employee
Route::get('/read/{id}', [EmployeeController::class, 'read'])->name('read');

// delete employee
Route::get('/delete/{id}', [EmployeeController::class, 'delete'])->name('delete');


