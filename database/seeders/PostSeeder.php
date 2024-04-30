<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::factory()
            ->count(30)
            ->withRandomMonth(2022)
            ->forUser()
            ->create();

        Post::factory()
            ->count(10)
            ->forUser()
            ->withRandomMonth(2023)
            ->create();

        Post::factory()
            ->count(10)
            ->forUser()
            ->withRandomMonth(2024)
            ->create();
    }
}
