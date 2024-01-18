<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('/admin')->group(function (){
    Route::prefix('/user')->group(function (){
        Route::get('/',[UserController::class,'list'])->name('admin.user.list');
        Route::get('/add',[UserController::class,'add'])->name('admin.user.add');
        Route::post('/add',[UserController::class,'doAdd'])->name('admin.user.doAdd');
        Route::get('/update/{id}',[UserController::class,'update'])->name('admin.user.update');
        Route::post('/update',[UserController::class,'doUpdate'])->name('admin.user.doUpdate');
        Route::get('/delete/{id}',[UserController::class,'delete'])->name('admin.user.delete');
    });
});