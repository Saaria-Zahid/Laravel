<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/',[HomeController::class,'home']);


// Route::get('dashboard', [HomeController::class,'login_home'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', function () {
    if (Auth::check()) {
        return app(HomeController::class)->login_home();
    }else {
        return app(HomeController::class)->home();
    }
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



//Admin Dash Redirect
Route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);
// Category Routing Start
Route::get('view_category',[AdminController::class,'view_category'])->middleware(['auth','admin']);
Route::post('add_category',[AdminController::class,'add_category'])->middleware(['auth','admin']);
Route::get('delete_category/{id}',[AdminController::class,'delete_category'])->middleware(['auth','admin']);
Route::get('edit_category/{id}',[AdminController::class,'edit_category'])->middleware(['auth','admin']);
Route::post('update_category/{id}',[AdminController::class,'update_category'])->middleware(['auth','admin']);
// Category Routing End
// Product Routing Start
Route::get('add_product',[AdminController::class,'add_product'])->middleware(['auth','admin']);
Route::post('upload_product',[AdminController::class,'upload_product'])->middleware(['auth','admin']);
Route::get('view_product',[AdminController::class,'view_product'])->middleware(['auth','admin']);
Route::get('edit_product/{id}',[AdminController::class,'edit_product'])->middleware(['auth','admin']);
Route::post('update_product/{id}',[AdminController::class,'update_product'])->middleware(['auth','admin']);
Route::get('delete_product/{id}',[AdminController::class,'delete_product'])->middleware(['auth','admin']);
Route::get('product_search',[AdminController::class,'product_search'])->middleware(['auth','admin']);
// Product Routing End
// Product Ui

Route::get('product_detail/{id}',[HomeController::class,'product_detail']);
Route::get('add_cart/{id}',[HomeController::class,'add_cart'])->middleware(['auth','verified']);
Route::get('mycart',[HomeController::class,'mycart'])->middleware(['auth','verified']);
Route::get('remove_cart/{id}',[HomeController::class,'remove_cart'])->middleware(['auth','verified']);
Route::get('checkout',[HomeController::class,'checkout'])->middleware(['auth','verified']);
Route::post('confirm_order',[HomeController::class,'confirm_order'])->middleware(['auth','verified']);
// Product Ui End


