<?php

declare(strict_types=1);

use App\Http\Controllers\PolicesController;
use App\Livewire\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class);

Route::get('/privacy-policy', [PolicesController::class, 'privacy']);
Route::get('/cookie-policy', [PolicesController::class, 'cookie']);
Route::get('/terms-of-service', [PolicesController::class, 'terms']);
Route::get('/resume', [PolicesController::class, 'resume']);
