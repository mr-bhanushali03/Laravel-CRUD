<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[CustomerController::class,'index'])->name('index');
Route::get('/customers',[CustomerController::class,'create'])->name('create');
Route::post('/customers/store',[CustomerController::class,'store'])->name('store');
Route::get('/customers/show/{id}',[CustomerController::class,'show'])->name('show');
Route::get('/customers/delete/{id}',[CustomerController::class,'delete'])->name('delete');
Route::get('/customers/edit/{id}',[CustomerController::class,'edit'])->name('edit');
Route::post('/customers/update/{id}',[CustomerController::class,'update'])->name('update');