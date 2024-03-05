<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public readonly array $links;

    public function __construct()
    {
        $this->links = [
            'Blog' => route('blog'),
            'Projects' => route('projects'),
            'Contact' => route('contact'),
            'About' => route('about'),
        ];
    }

    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
