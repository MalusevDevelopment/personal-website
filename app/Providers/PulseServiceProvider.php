<?php

declare(strict_types=1);

namespace App\Providers;

use App\Helpers\Permissions;
use App\Models\User;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Support\ServiceProvider;
use Laravel\Pulse\Facades\Pulse;

class PulseServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        Pulse::user(static fn (User $user): array => [
            'name' => $user->name,
            'extra' => $user->email,
            'avatar' => $user->avatar_url,
        ]);

        $this->app->make(Gate::class)->define('viewPulse', static fn (User $user) => $user->can(Permissions::VIEW_PULSE));
    }
}
