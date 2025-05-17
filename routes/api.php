<?php

use App\Http\Controllers\CategoreProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DeliveryMethodController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StatusOrderController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\UserSettingController;
use Illuminate\Support\Facades\Route;


Route::get('products/{product}/related', [ProductController::class, 'related']);

Route::apiResources([
    'orders'=>OrderController::class,
    'reviews'=>ReviewController::class,
    'statuses'=>StatusController::class,
    'products'=>ProductController::class,
    'settings'=>SettingController::class,
    'favorites'=>FavoriteController::class,
    'categories'=>CategoryController::class,
    'payment-type'=>PaymentTypeController::class,
    'user-address'=>UserAddressController::class,
    'user-settings'=>UserSettingController::class,
    'status.orders'=>StatusOrderController::class,
    'products.reviews'=>ProductReviewController::class,
    'delivery-methods'=>DeliveryMethodController::class,
    'categories.products'=>CategoreProductController::class,
]);