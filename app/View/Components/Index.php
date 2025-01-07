<?php

declare(strict_types=1);

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Index extends Component
{
    public function render(): View|Closure|string
    {
        return $this->factory()->make('pages.index');
    }
}
