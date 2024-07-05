<?php

use App\Http\Controllers\FreelanceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
// use App\Http\Middleware\freelancer;

Route::get('wel', function () {
    return view('welcome');
});

// Home
Route::get('/',  [HomeController::class, 'index'])->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// freelancer
Route::get('freelancer_form',  [FreelanceController::class, 'form'])->middleware(['auth','freelancer']);
Route::post('add_details',  [FreelanceController::class, 'details_form'])->middleware(['auth','freelancer']);
Route::get('profile',  [FreelanceController::class, 'profile'])->middleware(['auth','freelancer']);
Route::get('edit_profile/{id}',  [FreelanceController::class, 'edit_profile'])->middleware(['auth','freelancer']);
Route::put('update_details/{id}',  [FreelanceController::class, 'update_profile'])->middleware(['auth','freelancer']);
