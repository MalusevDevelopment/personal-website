<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use Symfony\Component\HttpKernel\Exception\UnsupportedMediaTypeHttpException;

class SearchController extends Controller
{
    public function __construct(private readonly \Illuminate\Contracts\Routing\ResponseFactory $responseFactory, private readonly \Illuminate\Contracts\View\Factory $viewFactory)
    {
    }
    public function search(SearchRequest $searchRequest)
    {
        $term = $searchRequest->validated('term');

        return match ($searchRequest->header('Accept', 'application/json')) {
            'application/json' => $this->responseFactory->json([
                'term' => $term,
                'items' => [],
            ]),
            'text/html' => $this->viewFactory->make('components.search.item', [
                'term' => $term,
                'items' => [],
            ]),
            default => throw new UnsupportedMediaTypeHttpException('Unsupported media type'),
        };
    }
}
