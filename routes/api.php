<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/search',[HomeController::class,'search'])->name('search');
Route::post('/add-cart',[CartController::class, 'addToCart'])->name('api.cart.add');
Route::put('/update-cart',[CartController::class,'updateCart'])->name('api.cart.update');
Route::delete('/del-cart',[CartController::class,'deleteCart'])->name('api.cart.delete');