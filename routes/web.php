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
Route::post('/customers',[CustomerController::class,'Create'])->name('insert');
Route::get('/customers/view',[CustomerController::class,'Show'])->name('show');
Route::get('/customers/delete/{id}',[CustomerController::class,'delete'])->name('delete');
Route::get('/customers/update/{id}',[CustomerController::class,'update'])->name('update');
Route::post('/customers/upd-show/{id}',[CustomerController::class,'updateShow'])->name('updateShow');