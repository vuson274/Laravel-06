<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
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

// Route::get('/home',[CategoryController::class,'index'])->name('home');
// Route::get('category',[CategoryController::class,'category'])->name('category');

Route::get('/user',[UserController::class,'getAll']);
Route::get('/user-where',[UserController::class,'where']);
Route::get('/user-orwhere',[UserController::class,'orWhere']);
Route::get('/user-groupwhere',[UserController::class,'groupWhere']);
Route::get('/user-first',[UserController::class,'first']);
Route::get('/user-select',[UserController::class,'select']);
Route::get('/join',[UserController::class,'join']);
Route::get('/lelf-join',[UserController::class,'lelfJoin']);
Route::get('/right-join',[UserController::class,'rightJoin']);