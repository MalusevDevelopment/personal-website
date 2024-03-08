<?php

namespace Database\Seeders;

use App\Helpers\Roles;
use App\Models\User;
use Illuminate\Database\Seeder;

class DefaultUserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::create([
            'name' => 'Dusan Malusev',
            'email' => 'dusan@dusanmalusev.dev',
            'password' => 'password',
            'email_verified_at' => now(),
        ]);

        $user->assignRole(Roles::OWNER);
    }
}
