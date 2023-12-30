<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array<int, string|null>
     */
    public function hosts(): array
    {
        return [
            'dusanmalusev.local',
            $this->app->get(Repository::class)->get('app.domain'),
        ];
    }
}
