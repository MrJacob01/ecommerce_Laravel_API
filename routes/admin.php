<?php

use App\Http\Controllers\StatsController;
use Illuminate\Support\Facades\Route;

Route::prefix('stats')->group(function () {
    Route::get('orders-count', [StatsController::class, 'ordersCount']);
    Route::get('delevery-method-ratios', [StatsController::class, 'deleveryMethodRatios']);
    Route::get('status-by-type', [StatsController::class, 'statusByType']);
    Route::get('orders-by-days', [StatsController::class, 'ordersCountByDays']);

});
