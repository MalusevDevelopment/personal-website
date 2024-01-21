<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function blog()
    {
        return 'Blog';
    }

    public function projects()
    {
        return 'Projects';
    }

    public function contact()
    {
        return 'Contact';
    }

    public function about()
    {
        return 'About';
    }

}
