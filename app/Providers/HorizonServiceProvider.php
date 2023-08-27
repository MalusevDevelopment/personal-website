<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Laravel\Horizon\Horizon;
use Laravel\Horizon\HorizonApplicationServiceProvider;

class HorizonServiceProvider extends HorizonApplicationServiceProvider
{
    public function boot(): void
    {
        parent::boot();

        Horizon::routeSmsNotificationsTo(config('app.owner.phone'));
        Horizon::routeMailNotificationsTo(config('app.owner.email'));
//         Horizon::routeSlackNotificationsTo('slack-webhook-url', '#horizon');
    }

    protected function gate(): void
    {
        Gate::define('viewHorizon', static function (User $user) {
            return $user->email === config('app.owner.email');
        });
    }
}
