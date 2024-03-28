<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


// returns the home page with all products
Route::get('/', [ProductController::class, 'index'])->name('products.index');
// returns the form for adding a post
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// adds a post to the database
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// returns the form for editing a post
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
// updates a post
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
// deletes a post
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
