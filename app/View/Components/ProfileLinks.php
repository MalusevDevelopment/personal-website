<?php

declare(strict_types=1);

namespace App\View\Components;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProfileLinks extends Component
{
    public private(set) readonly array $links;

    public function __construct(Repository $config)
    {
        $this->links = $config->get('app.owner.links');
    }

    public function render(): View
    {
        return $this->factory()->make('components.profile-links.links');
    }
}
