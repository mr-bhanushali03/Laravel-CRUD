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

Route::get('/',[CustomerController::class,'index']);
Route::post('/customers',[CustomerController::class,'create'])->name('create');
Route::get('/customers/view',[CustomerController::class,'show'])->name('show');
Route::get('/customers/delete/{id}',[CustomerController::class,'delete'])->name('delete');
Route::get('/customers/update/{id}',[CustomerController::class,'edit'])->name('update');
Route::post('/customers/upd-show/{id}',[CustomerController::class,'update'])->name('updateShow');