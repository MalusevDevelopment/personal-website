<?php

declare(strict_types=1);

namespace App\Services;

use App\Enums\PostStatus;
use App\Models\Post;
use Carbon\CarbonImmutable;
use Illuminate\Database\Query\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class PostService
{
    /**
     * @return array{paginator: LengthAwarePaginator, groups: Collection}
     */
    public function getPostsGroupByYear(?int $year): array
    {
        $paginator = Post::query()
            ->where('posts.status', PostStatus::PUBLISHED)
            ->when(
                $year !== null,
                static fn (Builder $builder) => $builder->whereBetween('created_at', [
                    CarbonImmutable::create($year),
                    CarbonImmutable::create($year, 12, 31),
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

        return ['paginator' => $paginator, 'groups' => $groups];
    }
}
