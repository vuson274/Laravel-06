<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SaleController;
Route::prefix('/admin')->group(function (){
    Route::prefix('/category')->group(function (){
        Route::get('/',[CategoryController::class,'list'])->name('admin.category.list');
        Route::get('/add', [CategoryController::class,'add'])->name('admin.category.add');
        Route::post('/doAdd', [CategoryController::class,'doAdd'])->name('admin.category.doAdd');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/doEdit', [CategoryController::class,'doEdit'])->name('admin.category.doEdit');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
    });
    Route::prefix('/sale')->group(function (){
        Route::get('/',[SaleController::class,'list'])->name('admin.sale.list');
        Route::get('/add', [SaleController::class,'add'])->name('admin.sale.add');
        Route::post('/doAdd', [SaleController::class,'doAdd'])->name('admin.sale.doAdd');
        Route::get('/edit/{id}', [SaleController::class, 'edit'])->name('admin.sale.edit');
        Route::post('/doEdit', [SaleController::class,'doEdit'])->name('admin.sale.doEdit');
        Route::get('/delete/{id}', [SaleController::class, 'delete'])->name('admin.sale.delete');
    });
    
});
?>