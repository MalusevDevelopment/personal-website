<?php

namespace App\Filament\Resources\UserResource;

use Carbon\CarbonImmutable;

final readonly class UserActions
{
    public static function mutateBeforeSave(array $data): array
    {
        if ($data['password'] === null) {
            ray($data);
            unset($data['password']);
        }

        $data['email_verified_at'] = $data['email_verified_at'] ? CarbonImmutable::now() : null;

        return $data;
    }
}
