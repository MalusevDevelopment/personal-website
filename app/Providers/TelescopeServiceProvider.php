<?php

declare(strict_types=1);

namespace App\Providers;

use App\Helpers\Permissions;
use App\Models\User;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Support\Collection;
use Laravel\Telescope\IncomingEntry;
use Laravel\Telescope\Telescope;
use Laravel\Telescope\TelescopeApplicationServiceProvider;

class TelescopeServiceProvider extends TelescopeApplicationServiceProvider
{
    public function register(): void
    {
        Telescope::night();
        Telescope::filter(static fn (IncomingEntry $incomingEntry): true => true);
        Telescope::filterBatch(static fn (Collection $entries): true => true);

        Telescope::avatar(static fn (string $id): string => '/avatars/'.User::query()->find($id)->avatar_url);

        $this->hideSensitiveRequestDetails();
    }

    protected function hideSensitiveRequestDetails(): void
    {
        if ($this->app->environment('local')) {
            return;
        }

        Telescope::hideRequestParameters(['_token']);

        Telescope::hideRequestHeaders([
            'cookie',
            'x-csrf-token',
            'x-xsrf-token',
        ]);
    }

    protected function gate(): void
    {
        $this->app->make(Gate::class)
            ->define('viewTelescope', static fn (User $user) => $user->can(Permissions::VIEW_TELESCOPE));
    }
}
