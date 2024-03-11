<?php

namespace App\Mixins;

use BackedEnum;
use Illuminate\Database\Connection;
use Tpetry\PostgresqlEnhanced\Schema\Builder;

class FormatEnumArgs
{
    public static function formatArgs(Connection $conn, string $name, array $values)
    {
        /** @var $this Builder */
        $pdo = $conn->getPdo();

        $name = $conn->getSchemaGrammar()->wrap($name);
        $value = collect($values)
            ->map(fn($status) => $pdo->quote($status instanceof BackedEnum ? $status->value : (string)$status))
            ->join(', ');

        return [$name, $value];
    }
}