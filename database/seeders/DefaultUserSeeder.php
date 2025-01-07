<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Helpers\Roles;
use App\Models\User;
use Illuminate\Database\Seeder;

class DefaultUserSeeder extends Seeder
{
    public function run(): void
    {
        $model = \App\Models\User::query()->create([
            'name' => 'Dusan Malusev',
            'email' => 'dusan@dusanmalusev.dev',
            'password' => 'password',
            'email_verified_at' => now(),
        ]);

        $model->assignRole(Roles::OWNER);
    }
}
