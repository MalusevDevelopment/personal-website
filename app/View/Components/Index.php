<?php

declare(strict_types=1);

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Index extends Component
{
    public function render(): View|Closure|string
    {
        return view('pages.index');
    }
}
