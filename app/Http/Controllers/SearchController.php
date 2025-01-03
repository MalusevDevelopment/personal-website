<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use Symfony\Component\HttpKernel\Exception\UnsupportedMediaTypeHttpException;

class SearchController extends Controller
{
    public function search(SearchRequest $request)
    {
        $term = $request->validated('term');

        return match ($request->header('Accept', 'application/json')) {
            'application/json' => response()->json([
                'term' => $term,
                'items' => [],
            ]),
            'text/html' => view('components.search.item', [
                'term' => $term,
                'items' => [],
            ]),
            default => throw new UnsupportedMediaTypeHttpException('Unsupported media type'),
        };
    }
}
