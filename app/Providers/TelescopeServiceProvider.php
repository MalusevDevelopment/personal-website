<?php

declare(strict_types=1);

namespace App\Providers;

use App\Helpers\Permissions;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Gate;
use Laravel\Telescope\IncomingEntry;
use Laravel\Telescope\Telescope;
use Laravel\Telescope\TelescopeApplicationServiceProvider;

class TelescopeServiceProvider extends TelescopeApplicationServiceProvider
{
    public function register(): void
    {
        Telescope::night();
        Telescope::filter(static fn(IncomingEntry $entry) => true);
        Telescope::filterBatch(static function (Collection $entries) {
            return true;
        });

//        Telescope::avatar(static function (string $id, string $email) {
//            return '/avatars/' . User::find($id)->avatar_path;
//        });

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
        Gate::define('viewTelescope', static function (User $user) {
            return $user->can(Permissions::VIEW_TELESCOPE);
        });
    }
}
