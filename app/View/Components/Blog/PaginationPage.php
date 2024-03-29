<?php

namespace App\View\Components\Blog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PaginationPage extends Component
{
    public function __construct(
        public readonly bool $active = true,
        public readonly int $page = 1,
    )
    {
    }

    public function render(): View|Closure|string
    {
        return view('components.blog.pagination-page');
    }
}
