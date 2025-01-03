<?php

namespace App\Providers;

use App\Helpers\Permissions;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Laravel\Pulse\Facades\Pulse;

class PulseServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        Pulse::user(static fn (User $user) => [
            'name' => $user->name,
            'extra' => $user->email,
            'avatar' => $user->avatar_url,
        ]);

        Gate::define('viewPulse', static fn (User $user) => $user->can(Permissions::VIEW_PULSE));
    }
}
