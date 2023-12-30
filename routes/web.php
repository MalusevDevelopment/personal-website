<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PolicesController;

Route::get('/', [IndexController::class, 'index']);

Route::get('/privacy-policy', [PolicesController::class, 'privacy']);
Route::get('/cookie-policy', [PolicesController::class, 'cookie']);
Route::get('/terms-of-service', [PolicesController::class, 'terms']);
// Route::get('/resume', [PolicesController::class, 'resume']);
