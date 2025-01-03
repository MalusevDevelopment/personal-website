<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\GetBlogPostsRequest;
use App\Services\PostService;

class IndexController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function blog(GetBlogPostsRequest $request, PostService $service)
    {
        $year = $request->validated()['year'] ?? null;

        $data = $service->getPostsGroupByYear($year !== null ? (int) $year : null);

        return view('pages.blog', $data);
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
