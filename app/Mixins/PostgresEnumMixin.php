<?php

declare(strict_types=1);

namespace App\Mixins;

use Closure;
use Tpetry\PostgresqlEnhanced\Schema\Builder;

class PostgresEnumMixin
{
    public function createEnum(): Closure
    {
        return function (string $name, array $values) {
            /** @var $this Builder */
            $conn = $this->getConnection();
            [$name, $value] = FormatEnumArgs::formatArgs($conn, $name, $values);
            $conn->statement("CREATE TYPE $name AS ENUM ($value);");
        };
    }

    public function createEnumIfNotExists(): Closure
    {
        return function (string $name, array $values) {
            /** @var $this Builder */

            $conn = $this->getConnection();
            [$name, $value] = FormatEnumArgs::formatArgs($conn, $name, $values);
            $conn->statement(
                <<<SQL
                DO $$ BEGIN
                    CREATE TYPE $name AS ENUM($value);
                EXCEPTION
                    WHEN duplicate_object THEN null;
                END $$;
                SQL
            );
        };
    }

    public function dropEnum(): Closure
    {
        return function (string $name) {
            /** @var $this Builder */
            $conn = $this->getConnection();
            [$name] = FormatEnumArgs::formatArgs($conn, $name, []);
            $conn->statement("DROP TYPE $name;");
        };
    }

    public function dropEnumIfExists(): Closure
    {
        return function (string $name) {
            /** @var $this Builder */
            $conn = $this->getConnection();
            [$name] = FormatEnumArgs::formatArgs($conn, $name, []);
            $conn->statement(
                <<<SQL
                DO $$
                BEGIN
                    DROP TYPE $name;
                EXCEPTION
                    WHEN undefined_object THEN null;
                END $$;
                SQL
            );
        };
    }
}
