<?php

declare(strict_types=1);

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\UrlGenerator;
use Illuminate\View\Component;

class Header extends Component
{
    public readonly array $links;

    public function __construct(UrlGenerator $urlGenerator)
    {
        $this->links = [
            'Blog' => $urlGenerator->route('blog'),
            'Projects' => $urlGenerator->route('projects'),
            'Contact' => $urlGenerator->route('contact'),
        ];
    }

    public function render(): View|Closure|string
    {
        return $this->factory()->make('components.header');
    }
}
