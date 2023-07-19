<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\OrderController;

Route::get('/', [ProductController::class, 'index'])->name('product.index');


Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');


Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::get('/login', [CustomAuthController::class, 'showLoginForm'])->name('login');
Route::post('/submit-order', [OrderController::class, 'submitOrder'])->name('order.submit');

Route::get('/confirmation/{orderId}', [OrderController::class, 'confirmation'])->name('confirmation');
Route::post('/client/confirmation/{orderId}', [OrderController::class, 'confirmation'])->name('client.confirmation');



