<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductControl;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});


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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
