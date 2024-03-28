<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
    Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/shop-cart',[CartController::class,'cart'])->name('shop-cart');
?>