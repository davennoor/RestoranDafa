<?php

use App\Http\Controllers\AuthentikasiController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

//Register
Route::get('/register',[AuthentikasiController::class,'register'])->name('registeryu');
Route::post('/postregister',[AuthentikasiController::class,'postregister'])->name('postregisteryu');


//Login
Route::get('/',[AuthentikasiController::class,'login'])->name('loginyu');
Route::post('/postlogin',[AuthentikasiController::class,'postlogin'])->name('postloginyu');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard',[MainController::class,'dashboard'])->name('dashboardkuy');
});