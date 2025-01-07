<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\GetBlogPostsRequest;
use App\Services\PostService;

class IndexController extends Controller
{
    public function __construct(private readonly \Illuminate\Contracts\View\Factory $viewFactory)
    {
    }
    public function index()
    {
        return $this->viewFactory->make('pages.index');
    }

    public function blog(GetBlogPostsRequest $getBlogPostsRequest, PostService $postService)
    {
        $year = $getBlogPostsRequest->validated()['year'] ?? null;

        $data = $postService->getPostsGroupByYear($year !== null ? (int) $year : null);

        return $this->viewFactory->make('pages.blog', $data);
    }

    public function projects(): string
    {
        return 'Projects';
    }

    public function contact(): string
    {
        return 'Contact';
    }

    public function about(): string
    {
        return 'About';
    }
}
