<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class PolicesController extends Controller
{
    public function privacy(): View
    {
        return view('privacy');
    }

    public function cookie(): View
    {
        return view('cookie');
    }

    public function terms(): View
    {
        return view('terms');
    }

    public function resume(): BinaryFileResponse
    {
        return response()->file('');
    }
}
