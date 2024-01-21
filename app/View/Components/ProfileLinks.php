<?php

declare(strict_types=1);

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProfileLinks extends Component
{
    public function __construct()
    {
    }

    public function render(): View|Closure|string
    {
        return view('components.profile-links');
    }
}
