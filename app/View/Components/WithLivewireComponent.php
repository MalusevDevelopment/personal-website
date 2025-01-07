<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\View\Component;

abstract class WithLivewireComponent extends Component
{
    public function __construct(public private(set) readonly bool $withLivewire = true) {}
}
