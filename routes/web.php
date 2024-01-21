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
    Route::get('/', [IndexController::class, 'index'])
        ->name('index');
    Route::get('/privacy-policy', [PolicesController::class, 'privacy'])
        ->name('privacy-policy');
    Route::get('/cookie-policy', [PolicesController::class, 'cookie'])
        ->name('cookie-policy');
    Route::get('/terms-of-service', [PolicesController::class, 'terms'])
        ->name('terms-of-service');

    Route::get('/blog', [IndexController::class, 'blog'])
        ->name('blog');
    Route::get('/projects', [IndexController::class, 'projects'])
        ->name('projects');
    Route::get('/contact', [IndexController::class, 'contact'])
        ->name('contact');
    Route::get('/about', [IndexController::class, 'about'])
        ->name('about');
});
