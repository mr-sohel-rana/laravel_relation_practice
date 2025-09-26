<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApisController;
use App\Http\Controllers\ProductController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/addApi',[ApisController::class,'addApi'])->name('api');
Route::put('/update/{id}',[ApisController::class,'update'])->name('update');
Route::delete('/delete/{id}',[ApisController::class,'delete'])->name('delete');
Route::get('/allData',[ApisController::class,'index'])->name('index');

Route::resource('product', ProductController::class);
