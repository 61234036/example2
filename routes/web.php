<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/calculator/sum/{num1}/{num2}', [CalculatorController::class, 'sum']);
Route::get('/สวัสดี/{name}/{surname}/{age}', [UserController::class, 'hello']);

Route::get('/insert_activity/{name}', [ActivityController::class, 'create']);
Route::get('/insert_activity', [ActivityController::class, 'index']);
Route::get('/delete_activity/{id}', [ActivityController::class, 'delete']);
