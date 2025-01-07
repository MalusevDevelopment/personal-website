<?php

declare(strict_types=1);

namespace App\View\Components\Blog;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class ArticlesByYear extends Component
{
    public function __construct(
        public readonly int $year,
        public readonly Collection $posts,
    ) {}

    public function render(): View
    {
        return $this->factory()->make('components.blog.articles-by-year');
    }
}
