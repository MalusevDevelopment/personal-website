<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PolicesController extends Controller
{
    public function __construct(private readonly \Illuminate\Contracts\View\Factory $viewFactory) {}

    public function privacy(): View
    {
        return $this->viewFactory->make('pages.privacy');
    }

    public function cookie(): View
    {
        return $this->viewFactory->make('pages.cookie');
    }

    public function terms(): View
    {
        return $this->viewFactory->make('pages.terms');
    }
}
