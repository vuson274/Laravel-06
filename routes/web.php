<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthorController;
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
// Route::get('/home',[AuthorController::class,'index'])->name('home');
Route::get('/user',[UserController::class,'getAll']);
Route::get('/user-where',[UserController::class,'where']);
Route::get('/user-orwhere',[UserController::class,'orWhere']);
Route::get('/user-groupwhere',[UserController::class,'groupWhere']);
Route::get('/user-first',[UserController::class,'first']);
Route::get('/user-select',[UserController::class,'select']);
Route::get('/join',[UserController::class,'join']);
Route::get('/lelf-join',[UserController::class,'lelfJoin']);
Route::get('/right-join',[UserController::class,'rightJoin']);
//demo
Route::get('/insert',[UserController::class,'insert']);
Route::get('/update',[UserController::class,'update']);
Route::get('/delete',[UserController::class,'delete']);
Route::get('/get-author',[AuthorController::class,'list']);
Route::get('/find',[AuthorController::class,'find']);
Route::get('/insert-author',[AuthorController::class,'insert']);
Route::get('/update-author',[AuthorController::class,'update']);
Route::get('/delete-author',[AuthorController::class,'delete']);

Route::get('/home',[AuthorController::class,'paginate']);
Route::get('/one-to-one',[AuthorController::class,'oneToOne']);
Route::get('/one-to-many',[AuthorController::class,'oneToMany']);
Route::get('/many-to-many',[AuthorController::class,'manyToMany']);

Route::get('/poly-one-to-one',[UserController::class,'oneToOne']);
Route::get('/poly-one-to-many',[ProductController::class,'oneToMany']);
Route::get('/poly-many-to-many',[ProductController::class,'manyToMany']);

Route::get('/file',[ProductController::class,'file']);
Route::post('/upload',[ProductController::class,'upload'])->name('upload');