<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PolicesController extends Controller
{
    public function privacy(): View
    {
        return view('pages.privacy');
    }

    public function cookie(): View
    {
        return view('pages.cookie');
    }

    public function terms(): View
    {
        return view('pages.terms');
    }
}
