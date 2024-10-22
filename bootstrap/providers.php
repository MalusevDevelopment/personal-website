<?php

declare(strict_types=1);

use App\Providers\AppServiceProvider;
use App\Providers\Filament\AdminPanelProvider;
use App\Providers\HorizonServiceProvider;
use App\Providers\TelescopeServiceProvider;
use CodeLieutenant\LaravelPgEnum\ServiceProvider;

return [
    ServiceProvider::class,
    AdminPanelProvider::class,
    TelescopeServiceProvider::class,
    HorizonServiceProvider::class,
    AppServiceProvider::class,
];
