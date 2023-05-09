<?php

use App\Http\Controllers\QuaitController;
use Illuminate\Support\Facades\Route;

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

Route::get('' , [QuaitController::class , 'index'])->name('home');
Route::get('category/{id}' , [QuaitController::class , 'category'])->name('category');
Route::get('dashboard' , [QuaitController::class , 'dashboard'])->name('dashboard');
Route::get('details' , [QuaitController::class , 'details'])->name('details');
Route::Post('store-product' , [QuaitController::class , 'storeProduct'])->name('store-product');
Route::Post('store-service' , [QuaitController::class , 'storeService'])->name('store-service');
Route::Post('store-category' , [QuaitController::class , 'storeCategory'])->name('store-category');
Route::get('booking-product/{id}' , [QuaitController::class , 'bookingProduct'])->name('booking-product');
Route::post("store-order" , [QuaitController::class , 'storeOrder'])->name("store-order");
Route::get("delete/{id}" , [QuaitController::class , 'deleteOrder'])->name("delete-order");
Route::get('services' , [QuaitController::class , 'services'])->name('services');
Route::get('booking-service/{id}' , [QuaitController::class , 'bookingService'])->name('booking-service');
Route::post("store-service-order" , [QuaitController::class , 'storeServiceOrder'])->name("store-service-order");
Route::get("delete-product/{id}" , [QuaitController::class , 'deleteProduct'])->name("delete-product");
Route::get("delete-service/{id}" , [QuaitController::class , 'deleteService'])->name("delete-service");
Route::get("edit-product/{id}" , [QuaitController::class , 'editProduct'])->name("edit-product");
Route::Post("update-product" , [QuaitController::class , 'updateProduct'])->name("update-product");
Route::get("edit-service/{id}" , [QuaitController::class , 'editService'])->name("edit-service");
Route::Post("update-service/" , [QuaitController::class , 'updateService'])->name("update-service");
Route::get("details/{id}" , [QuaitController::class , 'details'])->name("details");


