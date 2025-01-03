<?php

declare(strict_types=1);

namespace App\Enums;

enum Queue: string
{
    case Emails = 'emails';
    case Notifications = 'notifications';
    case Default = 'default';

    /**
     * @return array<string>
     */
    public static function values(): array
    {
        return array_map(static fn (Queue $queue) => $queue->value, self::cases());
    }
}
