<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
    Route::get('/',[HomeController::class,'home'])->name('home');
    Route::get('/shop-cart',[CartController::class,'cart'])->name('shop-cart');
    Route::get('/checkout',[OrderController::class,'checkOut'])->name('checkout');
    Route::post('/order', [OrderController::class,'makeOrder'])->name('make.order');
?>