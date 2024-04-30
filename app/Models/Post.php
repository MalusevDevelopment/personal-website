<?php

namespace App\Models;

use App\Enums\PostStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tpetry\PostgresqlEnhanced\Eloquent\Concerns\AutomaticDateFormatWithMilliseconds;
use Tpetry\PostgresqlEnhanced\Eloquent\Concerns\RefreshDataOnSave;

class Post extends Model
{
    use AutomaticDateFormatWithMilliseconds;
    use HasFactory;
    use RefreshDataOnSave;

    protected $fillable = [
        'title',
        'body',
        'metadata',
        'status',
    ];

    public function casts(): array
    {
        return [
            'title' => 'string',
            'body' => 'string',
            'metadata' => 'json',
            'status' => PostStatus::class,
            'user_id' => 'int',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopePublished(Builder $query): void
    {
        $query->where('status', PostStatus::PUBLISHED);
    }

    public function scopeDraft(Builder $query): void
    {
        $query->where('status', PostStatus::DRAFT);
    }

    public function scopeArchived(Builder $query): void
    {
        $query->where('status', PostStatus::ARCHIVED);
    }
}
