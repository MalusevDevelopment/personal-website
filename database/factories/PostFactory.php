<?php

namespace Database\Factories;

use App\Enums\PostStatus;
use App\Models\Post;
use Carbon\Month;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(100),
            'body' => fake()->text(1000),
            'metadata' => [],
            'status' => fake()->randomElement([
                PostStatus::PUBLISHED,
                PostStatus::DRAFT,
                PostStatus::ARCHIVED,
            ]),
            'created_at' => now(),
        ];
    }

    public function withRandomMonth(int $year)
    {
        return $this->state(fn () => [
            'created_at' => now()
                ->setYear($year)
                ->setMonth(
                    fake()->randomElement(Month::cases())
                ),
        ]);
    }

    public function published(): static
    {
        return $this->state(fn () => [
            'status' => PostStatus::PUBLISHED,
        ]);
    }

    public function draft(): static
    {
        return $this->state(fn () => [
            'status' => PostStatus::DRAFT,
        ]);
    }

    public function archived(): static
    {
        return $this->state(fn () => [
            'status' => PostStatus::ARCHIVED,
        ]);
    }
}
