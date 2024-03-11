<?php

namespace App\Mixins;

use BackedEnum;
use Illuminate\Database\Connection;
use Tpetry\PostgresqlEnhanced\Schema\Builder;

class FormatEnumArgs
{
    public static function formatArgs(Connection $conn, string $name, array $values): array
    {
        /** @var $this Builder */
        $pdo = $conn->getPdo();
        $name = $conn->getSchemaGrammar()->wrap($name);

        $value = array_reduce(
            $values,
            static fn($carry, $status) => $carry . ', ' . $pdo->quote($status instanceof BackedEnum ? $status->value : (string)$status),
            ''
        );

        return [$name, ltrim($value, ' ,')];
    }
}