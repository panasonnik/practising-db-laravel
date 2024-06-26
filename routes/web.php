<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', function () {
    return view('layout.app');
});

Route::get('/items', [Controllers\CategoryItemController::class, 'items'])->name('items');
Route::get('/categories', [Controllers\CategoryItemController::class, 'categories'])->name('categories');
Route::get('item/{id}',[Controllers\CategoryItemController::class, 'item'])->name('item');
Route::get('category/{id}',[Controllers\CategoryItemController::class, 'category'])->name('category');
Route::get('item/{id}/categories',[Controllers\CategoryItemController::class, 'itemCategories'])->name('itemCategories');
Route::get('category/{id}/items',[Controllers\CategoryItemController::class, 'categoryItems'])->name('categoryItems');

Route::get('customers', [Controllers\CustomerStatusController::class, 'customers'])->name('customers');
Route::get('statuses', [Controllers\CustomerStatusController::class, 'statuses'])->name('statuses');
Route::get('customer/{id}',[Controllers\CustomerStatusController::class, 'customer'])->name('customer');
Route::get('status/{id}/customers', [Controllers\CustomerStatusController::class, 'statusCustomers'])->name('statusCustomers');
