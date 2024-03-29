<?php

declare(strict_types=1);

use App\Providers\AppServiceProvider;
use App\Providers\Filament\AdminPanelProvider;
use App\Providers\HorizonServiceProvider;
use App\Providers\PostgresEnumProvider;
use App\Providers\TelescopeServiceProvider;

return [
    AdminPanelProvider::class,
    TelescopeServiceProvider::class,
    HorizonServiceProvider::class,
    PostgresEnumProvider::class,
    AppServiceProvider::class,
];
