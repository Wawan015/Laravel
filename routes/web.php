<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\StudentsController;

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


Route::get('/',[PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

Route::get('/siswa', [SiswaController::class, 'index']);

Route::get('/students', [StudentsController::class, 'index']);
Route::get('/students/create', [StudentsController::class, 'create']);
Route::post('/students', [StudentsController::class, 'store']);
Route::get('/edit/{id}', [StudentsController::class, 'edit']);
Route::put('/edit/{id}', [StudentsController::class, 'update']);
Route::delete('/delete/{id}', [StudentsController::class, 'delete']);
Route::get('/students/operations', [StudentsController::class, 'operations']);
