<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function blog()
    {
        return view('pages.blog');
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
