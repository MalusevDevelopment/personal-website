<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enums\PostStatus;
use App\Http\Requests\GetBlogPostsRequest;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Query\Builder;

class IndexController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function blog(GetBlogPostsRequest $request)
    {
        $year = $request->validated()['year'] ?? null;

        $paginator = Post::query()
            ->where('posts.status', PostStatus::PUBLISHED)
            ->when(
                $year !== null,
                static fn (Builder $query) => $query->whereBetween('created_at', [
                    Carbon::create($year),
                    Carbon::create($year, 12, 31),
                ])
            )
            ->orderByDesc('posts.created_at')
            ->select([
                'posts.id',
                'posts.title',
                'posts.status',
                'posts.created_at',
            ])
            ->paginate(perPage: 10)
            ->withQueryString();

        $groups = $paginator->mapToGroups(function (Post $post) {
            return [$post->created_at->year => $post];
        });

        return view('pages.blog', compact('paginator', 'groups'));
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
