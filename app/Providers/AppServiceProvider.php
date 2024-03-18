<?php

namespace App\Providers;

use App\Helpers\Permissions;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Laravel\Pulse\Facades\Pulse;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        Pulse::user(fn($user) => [
            'name' => $user->name,
            'extra' => $user->email,
            'avatar' => $user->avatar_url,
        ]);

        Gate::define('viewPulse', function (User $user) {
            return $user->can(Permissions::VIEW_PULSE);
        });
    }
}
