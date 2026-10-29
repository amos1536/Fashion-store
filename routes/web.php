<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/register', [App\Http\Controllers\RegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\RegistrationController::class, 'register'])->name('register.post');
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');
//product
Route::get('/product',[ProductController::class, 'index'])
->name('product.index');
//category
Route::get('/category',[CategoryController::class, 'index'])
->name('category.index');
//logout
Route::post('logout',[LoginController::class, 'logout'])
->name('logout');

