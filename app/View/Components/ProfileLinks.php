<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProfileLinks extends Component
{
    public readonly array $links;

    public function __construct()
    {
        $this->links = [
            [
                'href' => 'mailto:dusan@dusanmalusev.dev',
                'dataType' => 'email',
                'icon' => 'email',
            ],
            [
                'href' => 'https://github.com/dmalusev',
                'dataType' => 'github',
                'icon' => 'github',
            ],
            [
                'href' => 'https://www.linkedin.com/in/malusevd998',
                'dataType' => 'linkedin',
                'icon' => 'linkedin',
            ],
            [
                'href' => 'https://dev.to/malusev998',
                'dataType' => 'dev.to',
                'icon' => 'dev-to',
            ],
            [
                'href' => 'https://www.reddit.com/user/Back_Professional',
                'dataType' => 'reddit',
                'icon' => 'reddit',
            ],
            [
                'href' => 'https://stackoverflow.com/users/8411483/dusan-malusev',
                'dataType' => 'stackoverflow',
                'icon' => 'stack-overflow',
            ],
            [
                'href' => assert('resume.pdf'),
                'dataType' => 'resume',
                'icon' => 'resume',
            ],
        ];
    }

    public function render(): View
    {
        return view('components.profile-links.links');
    }
}
