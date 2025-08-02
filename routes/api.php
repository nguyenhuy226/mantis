
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\WishlistController;

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/product/relateship/{id}', [ProductController::class, 'getRelatedProducts']);

Route::get('/category', [CategoryController::class, 'index']);

Route::post('/customer/register', [CustomerController::class, 'register']);

Route::post('/authentication/login', [AuthController::class, 'login']);
Route::post('/authentication/refresh-token', [AuthController::class, 'refreshToken']);


Route::middleware('CustomTokenMiddleware')->group(function () {
    Route::post('/authentication/logout', [AuthController::class, 'logout']);

    Route::get('/customer/user', [CustomerController::class, 'getUser']);
    Route::put('/customer/user', [CustomerController::class, 'updateUser']);

    Route::get('/wishlist', [WishlistController::class, 'getWishlist']);
    Route::post('/wishlist', [WishlistController::class, 'addToWishlist']);
    Route::delete('/wishlist', [WishlistController::class, 'removeFromWishlist']);

    Route::get('/addresses', [AddressController::class, 'getAddresses']);
    Route::get('/addresses/{id}', [AddressController::class, 'getAddressDetail']);
    Route::post('/addresses', [AddressController::class, 'addAddress']);
    Route::put('/addresses/{id}', [AddressController::class, 'updateAddress']);
    Route::delete('/addresses/{id}', [AddressController::class, 'deleteAddress']);

    Route::get('/cart', [CartController::class, 'getCart']);
    Route::post('/cart', [CartController::class, 'addToCart']);
    Route::post('/cart/pre-checkout', [CartController::class, 'preCheckout']);
    Route::put('/cart/{id}', [CartController::class, 'updateCart']);
    Route::delete('/cart/{id}', [CartController::class, 'removeFromCart']);
    Route::delete('/cart', [CartController::class, 'clearCart']);

    Route::post('/cart/checkout', [OrderController::class, 'checkout']);
    Route::get('/order', [OrderController::class, 'index']);
});
