<?php

namespace App\View\Components\Blog;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Article extends Component
{
    public function __construct(
        public readonly Post $post
    ) {}

    public function render(): View|Closure|string
    {
        return view('components.blog.article');
    }
}
