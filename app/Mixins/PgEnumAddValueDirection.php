<?php

declare(strict_types=1);

namespace App\Mixins;

enum PgEnumAddValueDirection: string
{
    case BEFORE = 'BEFORE';
    case AFTER = 'AFTER';
}
