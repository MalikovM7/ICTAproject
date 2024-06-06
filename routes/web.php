<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/car',[CarController::class,'index'])->name('product.index');
Route::get('/cars/create',[CarController::class,'create'])->name('product.create');
Route::post('/car',[CarController::class,'store'])->name('product.store');
Route::get('/car/{car}/edit',[CarController::class,'edit'])->name('product.edit');
Route::put('/car/{car}/update',[CarController::class,'update'])->name('product.update');
Route::delete('/car/{car}/delete',[CarController::class,'delete'])->name('product.delete');