<?php

declare(strict_types=1);

namespace App\Providers;

use App\Helpers\Permissions;
use App\Models\User;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Support\Facades\Gate;
use Laravel\Horizon\Horizon;
use Laravel\Horizon\HorizonApplicationServiceProvider;

class HorizonServiceProvider extends HorizonApplicationServiceProvider
{
    public function boot(): void
    {
        parent::boot();

        $config = $this->app->make(Repository::class);

        Horizon::routeSmsNotificationsTo($config->get('app.owner.phone'));
        Horizon::routeMailNotificationsTo($config->get('app.owner.email'));
    }

    protected function gate(): void
    {
        Gate::define('viewHorizon', static fn (User $user) => $user->can(Permissions::VIEW_HORIZON));
    }
}
