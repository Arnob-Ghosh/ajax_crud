<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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


Route::get('/',[productController::class,'products']);
Route::post('/addproduct',[productController::class,'add_product'])->name('add.product');
Route::post('/updateproduct',[productController::class,'update_product'])->name('update.product');
Route::post('/delete-product',[productController::class,'delete_product'])->name('delete.product');
