<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoreProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DeliveryMethodController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StatusOrderController;
use App\Http\Controllers\UserAddressController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout']);
Route::get('user', [AuthController::class, 'user'])->middleware('auth:sanctum');

Route::apiResources([
    'categories'=>CategoryController::class,
    'products'=>ProductController::class,
    'categories.products'=>CategoreProductController::class,
    'status.orders'=>StatusOrderController::class,
    'statuses'=>StatusController::class,
    'favorites'=>FavoriteController::class,
    'orders'=>OrderController::class,
    'delivery-methods'=>DeliveryMethodController::class,
    'payment-type'=>PaymentTypeController::class,
    'user-address'=>UserAddressController::class,
    'reviews'=>ReviewController::class,
    'products.reviews'=>ProductReviewController::class
]);