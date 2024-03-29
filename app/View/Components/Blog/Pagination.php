<?php



namespace App\View\Components\Blog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Pagination extends Component
{
    public function __construct()
    {
    }

    public function render(): View|Closure|string
    {
        return view('components.blog.pagination');
    }
}
