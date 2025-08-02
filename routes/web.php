<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginpost'])->name('loginpost');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerpost'])->name('registerpost');
Route::get('/reset-password', [AuthController::class, 'resetPassword'])->name('resetPassword');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgotPassword');
Route::get('/check-mail', [AuthController::class, 'checkMail'])->name('checkMail');
Route::get('/code-verification', [AuthController::class, 'codeVerification'])->name('codeVerification');

Route::middleware('login')->group(function () {

    Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware('can:viewAny,App\Models\User');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create')->middleware('can:create,App\Models\User');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show')->middleware('can:view,App\Models\User');
    Route::post('/users', [UserController::class, 'store'])->name('users.store')->middleware('can:create,App\Models\App\Models\User');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update')->middleware('can:update,App\Models\User');
    Route::put('/change-permission/{user}', [UserController::class, 'changePermission'])->name('users.changePermission')->middleware('can:changePermission,App\Models\User');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('can:delete,App\Models\User');

    Route::get('/products', [ProductController::class, 'index'])->name('products.index')->middleware('can:viewAny,App\Models\Product');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create')->middleware('can:create,App\Models\Product');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show')->middleware('can:view,App\Models\Product');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store')->middleware('can:create,App\Models\App\Models\Product');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update')->middleware('can:update,App\Models\Product');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware('can:update,App\Models\Product');
    Route::delete('/products/{roduct}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('can:delete,App\Models\Product');

    Route::get('/account-profile', [AuthController::class, 'showProfileAccount'])->name('showProfileAccount');

    Route::get('/', [AuthController::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});
