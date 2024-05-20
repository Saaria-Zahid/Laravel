<?php

use App\Http\Controllers\ProductControl;
use Illuminate\Support\Facades\Route;


//Home
Route::get('/', [ProductControl::class,'index'])->name('proindex');
//Add Products
Route::get('/create', [ProductControl::class,'create'])->name('addpro');
//Store Data
Route::post('/prostore', [ProductControl::class,'store'])->name('productstore');

Route::get('/admin', [ProductControl::class,'adminpanel'])->name('admin');
//edit
Route::get('/products/{id}/edit', [ProductControl::class,'edit']);
// update
Route::put('products/{id}/update', [ProductControl::class, 'update']);
