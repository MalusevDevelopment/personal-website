<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Svg extends Component
{
    public function __construct(
        public readonly string $name,
    ) {}

    public function render(): View
    {
        return $this->factory()->make('svgs.'.$this->name);
    }
}
