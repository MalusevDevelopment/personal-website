<?php

declare(strict_types=1);

use App\Http\Middleware\AddContentSecurityPolicyHeaders;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PolicesController;

$middleware = [];

if (config('app.env', 'production') === 'production') {
    $middleware[] = AddContentSecurityPolicyHeaders::class;
}

Route::middleware($middleware)->group(function () {
    Route::get('/', [IndexController::class, 'index']);
    Route::get('/privacy-policy', [PolicesController::class, 'privacy']);
    Route::get('/cookie-policy', [PolicesController::class, 'cookie']);
    Route::get('/terms-of-service', [PolicesController::class, 'terms']);
});
